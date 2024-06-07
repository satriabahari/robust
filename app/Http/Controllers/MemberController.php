<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use App\Models\Member;
use App\Models\Membership;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $members = Member::all();
        // return view('member', compact('members'));
        return view('member');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $durations = Duration::all();
        $memberships = Membership::all();
        return view('member-create', compact('durations', 'memberships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'phone' => 'required|string|max:15',
            'membership_id' => 'required|integer',
            'duration_id' => 'required|integer',
        ]);

        // Simpan data member baru ke database
        Member::create($request->all());
        Alert::success('Success!', 'Member Created Successfully');
        // Redirect ke halaman index dengan pesan sukses
        return redirect('member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tampilkan data member berdasarkan ID
        $member = Member::findOrFail($id);
        return view('member', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form untuk mengedit data member berdasarkan ID
        $member = Member::findOrFail($id);
        $durations = Duration::all();
        $memberships = Membership::all();
        return view('member-edit', compact('member', 'memberships', 'durations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'phone' => 'required|string|max:15',
            'membership_id' => 'required|integer',
            'duration_id' => 'required|integer',
        ]);

        // Temukan member berdasarkan ID dan perbarui data
        $member = Member::findOrFail($id);
        Alert::toast('Member Updated Successsfully', 'success');
        $member->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan member berdasarkan ID dan hapus data
        $member = Member::findOrFail($id);
        $member->delete();
        alert()->success('Hore!', 'Post Deleted Successfully');
        return redirect('member');
    }
}
