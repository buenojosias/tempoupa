<?php

namespace App\Livewire\Mobile\Clinic;

use App\Models\Clinic;
use Livewire\Attributes\On;
use Livewire\Component;

class ClinicIndex extends Component
{
    public $clinics = [];
    public $latitude;
    public $longitude;

    public function mount()
    {
        // $this->clinics = Clinic::all();
    }


    #[On('getCoordinates')]
    public function getCoordinates($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->getClinics();
    }

    public function getClinics()
    {
        $this->clinics = Clinic::query()
            ->when($this->latitude && $this->longitude, function ($query) {
                $query->selectRaw(
                    '*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance',
                    [$this->latitude, $this->longitude, $this->latitude]
                )
                    ->having('distance', '<', 100)
                    ->orderBy('distance');
            })
            ->with('realtimes:clinic_id,type,total,situation')
            ->get();
    }

    public function render()
    {
        return view('livewire.mobile.clinic.clinic-index')
            ->layout('layouts.mobile');
    }
}
