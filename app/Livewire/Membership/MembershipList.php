<?php

namespace App\Livewire\Membership;

use Livewire\Component;

class MembershipList extends Component
{
    public $memberships;

    public function mount($memberships)
    {
        $this->memberships = $memberships;
    }

    public function render()
    {
        return view('livewire.membership.membership-list');
    }
}
