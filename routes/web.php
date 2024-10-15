<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard;
use App\Livewire\Files\ShowFile;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware('auth')->group(function() {
    Route::get("/dashboard", Dashboard::class)->name('dashboard');
    Route::get('/show-file/{id}' , ShowFile::class)
    ->lazy()
    ->name('showfile');
});


// Authenticate::redirectUsing();