<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class CreateButton extends Component
{
    // public $title;
    // public $route;
    // public function mount($title = null, $route)
    // {
    //     $this->title = $title;
    //     $this->route = $route;
    // }
    public $title;
    public function mount($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.dashboard.create-button');
    }
}
