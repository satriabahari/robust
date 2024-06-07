<?php

namespace App\Livewire\Dashboard;

use App\Models\Member;
use App\Models\Merchandise;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
        $users = User::count();
        $members = Member::count();
        $merchandises = Merchandise::count();
        return view('livewire.dashboard.dashboard', compact('users', 'members', 'merchandises'));
    }
}
