<?php

namespace App\Livewire\Mobile\Dashboard;

use Livewire\Component;

class Swiper extends Component
{
    public $nearestClinic;
    public $bestClinic;

    public function mount($nearestClinic, $bestClinic)
    {
        $this->nearestClinic = $nearestClinic;
        $this->bestClinic = $bestClinic;
    }

    public function render()
    {
        return view('livewire.mobile.dashboard.swiper');
    }
}
