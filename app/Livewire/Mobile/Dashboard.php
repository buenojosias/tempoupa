<?php

namespace App\Livewire\Mobile;

use App\Models\City;
use App\Models\Clinic;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public $clinics = [];
    public $citiesCount = 0;
    public $clinicsCount = 0;
    public $bestClinic = null;
    public $fastestClinic = null;
    public $nearestClinic = null;
    public $currentConsultation = null;

    public $latitude = null;
    public $longitude = null;

    public function mount()
    {
        $this->citiesCount = City::count();
        $this->clinics = Clinic::query()
            ->select('id', 'name', 'type', 'latitude', 'longitude', 'rating')
            ->with('realtimes', function ($query) {
                $query->select('clinic_id','type','total')->where('type', 'time');
            })
            ->get();
        $this->clinicsCount = $this->clinics->count();
        $this->bestClinic = $this->clinics->sortByDesc('rating')->first();
        $this->fastestClinic = $this->clinics->sortBy('realtimes.total')->first();

        $this->getCurrentConsultation();
    }

    public function getCurrentConsultation()
    {
        if (auth()->user()) {
            $this->currentConsultation = auth()
                ->user()
                ->consultations()
                ->where('status', '<', 5)
                ->with('clinic')
                ->first();
        }
    }

    private function haversineDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // Raio da Terra em quilômetros

        $latDelta = deg2rad($lat2 - $lat1);
        $lonDelta = deg2rad($lon2 - $lon1);

        $a = sin($latDelta / 2) * sin($latDelta / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($lonDelta / 2) * sin($lonDelta / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c; // Distância em quilômetros
    }

    public function findClosestClinic($clinics)
    {
        $closestClinic = null;
        $shortestDistance = PHP_FLOAT_MAX;

        foreach ($clinics as $clinic) {
            $distance = $this->haversineDistance(
                $this->latitude,
                $this->longitude,
                $clinic['latitude'],
                $clinic['longitude']
            );

            if ($distance < $shortestDistance) {
                $shortestDistance = $distance;
                $closestClinic = $clinic;
            }
        }
        return $closestClinic;
    }

    // #[On('getCoordinates')]
    public function getCoordinates($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->nearestClinic = $this->findClosestClinic($this->clinics);
    }

    public function render()
    {
        return view('livewire.mobile.dashboard')
            ->layout('layouts.mobile');
    }
}
