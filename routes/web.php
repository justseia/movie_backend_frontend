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
Route::get('/all/{movie}', App\Http\Controllers\Movie\ShowController::class)->name('home.show');
Route::post('/all/friend/{movie}', [App\Http\Controllers\AllController::class, 'find_friend'])->name('home.friend');
Route::get('/all/watch/{movie}', App\Http\Controllers\Movie\WatchController::class)->name('watch');
Route::get('/profile', App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
Route::get('/friends/{user}', App\Http\Controllers\Profile\Friendcontroller::class)->name('profile.friend');
Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite.index');
Route::post('/favorite/add/{movie}', [App\Http\Controllers\FavoriteController::class, 'add'])->name('favorite.add');
Route::post('/favorite/delete/{movie}', [App\Http\Controllers\FavoriteController::class, 'delete'])->name('favorite.delete');
Route::get('/privacy-policy', [App\Http\Controllers\AllController::class, 'privacy_policy'])->name('privacy-policy.index');
Route::get('/trailer', [App\Http\Controllers\AllController::class, 'trailer'])->name('trailer.index');
Route::get('/event', [App\Http\Controllers\AllController::class, 'event'])->name('event.index');
Route::get('/theater', [App\Http\Controllers\AllController::class, 'theater'])->name('theater.index');
Route::get('/back/{movie}', App\Http\Controllers\BackController::class)->name('back');


Route::name('admin.')->middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Post\InactiveController::class)->name('index');
    Route::get('/posts', \App\Http\Controllers\Admin\Post\IndexController::class)->name('posts');
    Route::get('/posts/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('posts.show');
    Route::post('/posts/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('posts.update');
    Route::post('/posts', \App\Http\Controllers\Admin\Post\StoreController::class)->name('posts.store');
    Route::delete('/posts/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('posts.delete');
    Route::get('/users', \App\Http\Controllers\Admin\User\IndexController::class)->name('users');
    Route::post('/users', \App\Http\Controllers\Admin\User\StoreController::class)->name('users.store');
    Route::delete('/users/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('users.delete');
    Route::get('/deleted', \App\Http\Controllers\Admin\Deleted\IndexController::class)->name('deleted');
    Route::post('/deleted/{delete}', \App\Http\Controllers\Admin\Deleted\UpdateController::class)->name('deleted.update');
});
