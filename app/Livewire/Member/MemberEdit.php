<?php

namespace App\Livewire\Member;

use Livewire\Component;

class MemberEdit extends Component
{
    public $member;
    public $memberships;
    public $durations;
    public function render()
    {
        return view('livewire.member.member-edit');
    }
}
