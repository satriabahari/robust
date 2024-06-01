<?php

namespace App\Livewire\Membership;

use Livewire\Component;

class MembershipCard extends Component
{
    public $title, $price, $description;
    public function mount($title, $price, $description)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
    }
    public function render()
    {
        return view('livewire.membership.membership-card');
    }
}
