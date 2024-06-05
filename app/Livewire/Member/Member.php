<?php

namespace App\Livewire\Member;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Member as ModelsMember;

class Member extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        // $members = ModelsMember::search($this->search)->get()->paginate(5);
        // return view('livewire.member.member', compact('members'));
        return view('livewire.member.member', [
            'members' => ModelsMember::search($this->search)->paginate(5),
        ]);
    }
}
