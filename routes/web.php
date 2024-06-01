<?php

use App\Http\Controllers\MembershipController;
use App\Livewire\Membership\Membership;
use Illuminate\Support\Facades\Route;

Route::view('/welcome', 'welcome');

Route::view('/', 'home')->name('home');

Route::view('member', 'member')->name('member');

Route::get('membership', [MembershipController::class, 'index'])->name('membership');

Route::view('join-online', 'join-online')->name('join-online');

Route::view('merchandise', 'merchandise')->name('merchandise');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
