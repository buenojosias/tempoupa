<?php

namespace App\Livewire\Mobile\Clinic;

use App\Models\Clinic;
use Livewire\Attributes\On;
use Livewire\Component;

class ClinicShow extends Component
{
    public $clinic_id;
    public $clinic = null;
    public $quantity = null;
    public $time = null;

    public function mount($clinic)
    {
        $this->clinic_id = $clinic;
        $this->clinic = null;
    }

    #[On('getCoordinates')]
    public function getCoordinates($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->getClinic();
    }

    public function getClinic()
    {
        $this->clinic = Clinic::query()
            ->selectRaw(
                '*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance',
                [$this->latitude, $this->longitude, $this->latitude]
            )
            ->where('id', $this->clinic_id)
            ->with('realtimes')
            ->firstOrFail();

        $this->quantity = $this->clinic->realtimes->where('type', 'quantity')->first();
        $this->time = $this->clinic->realtimes->where('type', 'time')->first();
    }

    public function render()
    {
        return view('livewire.mobile.clinic.clinic-show')
            ->layout('layouts.mobile');
    }
}
