<?php

use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\UpdatePasswordController;
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

Route::view('/', 'home');

Route::middleware('auth', 'verified')->group(function () {
    //Dashboard
    Route::view('/dashboard', 'dashboard');

    //Profile
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    //Password
    Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
});