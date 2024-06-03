<?php

namespace App\Livewire\JoinOnline;

use App\Models\Duration;
use App\Models\Member;
use App\Models\Membership;
use Livewire\Component;

class Form extends Component
{
    public $first_name;
    public $last_name;
    public $date_birth;
    public $phone;
    public $memberships;
    public $durations;
    public $membership_id;
    public $duration_id;

    // protected $rules = [
    //     'first_name' => 'required|string|max:255',
    //     'last_name' => 'required|string|max:255',
    //     'date_birth' => 'required|date',
    //     'phone' => 'required|string|max:12',
    //     'membership' => 'required|string|max:255',
    //     'duration' => 'required|integer|min:2',
    // ];

    public function save()
    {
        // Validate the incoming request data
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'date_birth' => 'required|date',
            'membership_id' => 'required|integer|exists:memberships,id',
            'duration_id' => 'required|integer|exists:durations,id',
        ]);

        // Create a new member with the validated data
        Member::create($this->only(['first_name', 'last_name', 'phone', 'date_birth', 'membership_id', 'duration_id']));

        // Reset the form fields or component state
        $this->reset();

        // Flash a success message to the session
        session()->flash('status', 'Member successfully created.');

        // Redirect to the membership page
        return redirect('/membership');
    }

    public function render()
    {
        return view('livewire.join-online.form');
    }
}
