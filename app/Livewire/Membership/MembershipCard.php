<?php

namespace App\Livewire\Membership;

use App\Models\Duration;
use Livewire\Component;

class MembershipCard extends Component
{
    public $title;
    public $price;
    public $description;
    public function mount($title, $price, $description)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
    }
    public function render()
    {
        $durations = Duration::orderBy('title', 'asc')->get();
        return view('livewire.membership.membership-card', compact('durations'));
    }
}
