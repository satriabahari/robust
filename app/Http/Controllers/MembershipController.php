<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index() {
        $memberships = Membership::all();
        return view('membership', compact('memberships'));
    }
}
