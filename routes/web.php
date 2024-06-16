<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Jetstream\Jetstream;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/map', function () {
        return Inertia::render('MapPage');
    })->name('map');


    Route::get('/profile', function () {
        $user = Auth::user();
        return Inertia::render('Profile/Show', [
            'confirmsTwoFactorAuthentication' => false,
            'sessions' => [],
            'jetstream' => [
                'canUpdateProfileInformation' => true,
                'canUpdatePassword' => true,
                'canManageTwoFactorAuthentication' => false,
                'hasAccountDeletionFeatures' => true,
                'managesProfilePhotos' => true,
            ],
            'auth' => [
                'user' => $user,
            ],
        ]);
    })->name('profile');
});


