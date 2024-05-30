<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.show-posts');
});

Route::get('/counter', Counter::class);
