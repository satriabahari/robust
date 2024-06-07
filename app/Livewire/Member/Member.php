<?php

namespace App\Livewire\Member;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Member as ModelsMember;

class Member extends Component
{
    use WithPagination;
    public $query = '';
    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        // $members = ModelsMember::search($this->search)->get()->paginate(5);
        // return view('livewire.member.member', compact('members'));
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        // return view('livewire.member.member', [
        //     'members' => ModelsMember::search($this->search)->get(),
        // ]);
        return view('livewire.member.member', [
            'members' => ModelsMember::where('first_name', 'like', '%'.$this->query.'%')->paginate(5),
        ]);
    }
}
