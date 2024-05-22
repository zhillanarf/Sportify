<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\DashboardController;
use  App\Http\Controllers\ProgramController;
use  App\Http\Controllers\WorkoutController;
use App\Models\Workout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/workouts', function () {
    return view('workouts', ['workouts' => Workout::all()]);
})->name('workouts');
Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::middleware(["auth", 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('programs', ProgramController::class);
    Route::resource('workouts', WorkoutController::class);
    Route::resource('users', UserController::class);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::get('/logout', 'doLogout')->name('doLogout');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister')->name('doRegister');
});
