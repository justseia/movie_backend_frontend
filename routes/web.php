<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', App\Http\Controllers\Movie\IndexController::class)->name('home.index');
Route::get('/movies/{movie}', App\Http\Controllers\Movie\ShowController::class)->name('home.show');
Route::get('/profile', App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
Route::get('/friends/{user}', App\Http\Controllers\Profile\Friendcontroller::class)->name('profile.friend');
Route::get('/watch/1', App\Http\Controllers\Movie\WatchController::class)->name('watch');
//Route::get('/buy', App\Http\Controllers\Movie\ShowController::class)->name('home.show');
//Route::get('/friends', App\Http\Controllers\Movie\ShowController::class)->name('home.show');
//Route::get('/friends/{friend}', App\Http\Controllers\Movie\ShowController::class)->name('home.show');
