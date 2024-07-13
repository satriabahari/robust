<?php

namespace App\Livewire\Merchandise;

use Livewire\Component;

class Merchandise extends Component
{
    public $merchandises;
    public function mount($merchandises)
    {
        $this->merchandises = $merchandises;
    }
    public function render()
    {
        return view('livewire.merchandise.merchandise');
    }
}
