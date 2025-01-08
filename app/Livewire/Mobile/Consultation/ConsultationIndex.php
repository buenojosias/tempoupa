<?php

namespace App\Livewire\Mobile\Consultation;

use Livewire\Component;

class ConsultationIndex extends Component
{
    public $consultations = [];

    public function mount()
    {
        if (auth()->user()) {
            $this->consultations = auth()->user()
                ->consultations()
                ->with('clinic:id,name,type')
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.mobile.consultation.consultation-index')
            ->layout('layouts.mobile');
    }
}
