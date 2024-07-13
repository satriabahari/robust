<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JoinOnlineController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MerchandiseController;
use Illuminate\Support\Facades\Route;

Route::view('/welcome', 'welcome');

Route::view('/', 'home')->name('home');

Route::get('membership', [MembershipController::class, 'index'])->name('membership');

Route::resource('member', MemberController::class);

Route::resource('join-online', JoinOnlineController::class);

Route::resource('merchandise', MerchandiseController::class);

Route::resource('dashboard', DashboardController::class);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
