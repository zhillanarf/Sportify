<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\DashboardController;

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
    return view('workouts');
})->name('workouts');
Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::middleware(["auth"])->controller(DashboardController::class)->prefix('dashboard')->group(function () {
    Route::get('/', 'index')->name('dashboard.admin');
    Route::get('/users', 'users')->name('dashboard.users');
    Route::get('/programs', 'programs')->name('dashboard.programs');
    Route::get('/workouts', 'workouts')->name('dashboard.workouts');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::get('/logout', 'doLogout')->name('doLogout');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister')->name('doRegister');
});
