<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ExploreUsers;
use App\Http\Livewire\Timeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('email/verify', Verify::class)->middleware('throttle:6,1')->name('verification.notice');

    Route::get('password/confirm', Confirm::class)->name('password.confirm');

    Route::prefix('profile')->group(function() {
        Route::get('', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    });

    Route::prefix('dashboard')->group(function() {
        Route::get('', Dashboard::class)->name('dashboard');
        Route::get('/follower', [DashboardController::class, 'follower'])->name('dashboard.follower');
        Route::get('/following', [DashboardController::class, 'following'])->name('dashboard.following');
        Route::post('/follower', [DashboardController::class, 'store'])->name('dashboard.store');
    });

    Route::resource('status', StatusController::class);

    Route::get('explore-users', ExploreUsers::class)->name('explore.users');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
