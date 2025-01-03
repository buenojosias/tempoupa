<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/', function () { return view('mobile.home'); })->name('mobile.home');
Route::get('/upas', function () { return view('mobile.clinics-list'); })->name('mobile.clinics.index');
Route::get('/upas/{upa}', function () { return view('mobile.clinics-show'); })->name('mobile.clinics.show');
Route::get('/upas/{upa}/situacao', function () { return view('mobile.clinics-situation'); })->name('mobile.clinics.situation');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
