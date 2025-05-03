<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';


//:::::::::::::::::::::::::::::::: FRONTEND :::::::::::::::::::::::::::::::::::::
Route::get('/index', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/login', [HomeController::class, 'login'])->name('frontend.login');
Route::get('/contact',[HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/support',[HomeController::class, 'support'])->name('frontend.support');
Route::get('/enquiry', [HomeController::class, 'enquiry'])->name('frontend.enquiry');