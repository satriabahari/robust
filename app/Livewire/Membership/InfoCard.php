<?php

namespace App\Livewire\Membership;

use Livewire\Component;

class InfoCard extends Component
{
    public $title, $description;
    public function mount($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }
    public function render()
    {
        return view('livewire.membership.info-card');
    }
}
