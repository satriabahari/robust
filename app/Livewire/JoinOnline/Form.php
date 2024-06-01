<?php

namespace App\Livewire\JoinOnline;

use App\Models\Member;
use Livewire\Component;

class Form extends Component
{
    public $first_name;
    public $last_name;
    public $date_birth;
    public $phone;
    public $membership_name;
    public $duration;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'date_birth' => 'required|date',
        'phone' => 'required|string|max:15',
        'membership_name' => 'required|string|max:255',
        'duration' => 'required|integer|min:1',
    ];
    public function save()
    {
        $this->validate();
        Member::create($this->only(['first_name', 'last_name', 'email', 'phone', 'date_of_birth', 'membership_name', 'duration']));
        $this->reset();
        // session()->flash('status', 'Member successfully updated.');

        // return $this->redirect('/membership');
    }
    public function render()
    {
        return view('livewire.join-online.form');
    }
}
