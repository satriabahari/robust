<?php

namespace App\Livewire\Member;

use Livewire\Component;

class MemberCreate extends Component
{
    public $memberships;
    public $durations;
    public function render()
    {
        return view('livewire.member.member-create');
    }
}
