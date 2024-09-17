<?php

use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin', AuthLogin::class)->name('login');
Route::get('/signup', AuthRegister::class)->name('register');

Route::get('/admin', AdminDashboard::class)->name('admin-dashboard');
