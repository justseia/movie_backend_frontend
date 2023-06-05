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
Route::get('/all/watch/{movie}', App\Http\Controllers\Movie\WatchController::class)->name('watch');
Route::get('/all/{movie}', App\Http\Controllers\Movie\ShowController::class)->name('home.show');
Route::get('/trailer', [App\Http\Controllers\AllController::class, 'trailer'])->name('trailer.index');
Route::get('/event', [App\Http\Controllers\AllController::class, 'event'])->name('event.index');
Route::get('/theater', [App\Http\Controllers\AllController::class, 'theater'])->name('theater.index');
Route::post('/search', [App\Http\Controllers\AllController::class, 'search'])->name('search.index');
Route::get('/back/{movie}', App\Http\Controllers\BackController::class)->name('back');
Route::get('/about-us', [App\Http\Controllers\AllController::class, 'about_us'])->name('about-us.index');
Route::get('/policy', [App\Http\Controllers\AllController::class, 'policy'])->name('policy.index');
Route::get('/organizers', [App\Http\Controllers\AllController::class, 'organizers'])->name('organizers.index');

Route::middleware('auth')->group(function () {
    Route::get('/all/{movie}/download', [App\Http\Controllers\AllController::class, 'download'])->name('download');
    Route::get('/all/buy/{movie}', [App\Http\Controllers\AllController::class, 'buy_ticket_index'])->name('movie.buy.index');
    Route::post('/all/buy/{movie}', [App\Http\Controllers\AllController::class, 'buy_ticket'])->name('movie.buy.store');
    Route::post('/all/friend/{movie}', [App\Http\Controllers\AllController::class, 'find_friend'])->name('home.friend');
    Route::get('/profile', App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
    Route::post('/profile', App\Http\Controllers\Profile\UpdateController::class)->name('profile.update');
    Route::get('/friends', [App\Http\Controllers\AllController::class, 'friend'])->name('friend.list');
    Route::get('/friends/{user}', App\Http\Controllers\Profile\Friendcontroller::class)->name('profile.friend');
    Route::get('/friends/{user}/follow', [App\Http\Controllers\AllController::class, 'follow'])->name('profile.follow');
    Route::get('/friends/{user}/unfollow', [App\Http\Controllers\AllController::class, 'unfollow'])->name('profile.unfollow');
    Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite.index');
    Route::post('/favorite/add/{movie}', [App\Http\Controllers\FavoriteController::class, 'add'])->name('favorite.add');
    Route::post('/favorite/delete/{movie}', [App\Http\Controllers\FavoriteController::class, 'delete'])->name('favorite.delete');
    Route::get('/privacy-policy', [App\Http\Controllers\AllController::class, 'privacy_policy'])->name('privacy-policy.index');
    Route::get('/purchased-tickets', [App\Http\Controllers\AllController::class, 'purchased_tickets'])->name('purchased-tickets.index');
});

Route::name('admin.')->middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Post\InactiveController::class)->name('index');
    Route::get('/all', \App\Http\Controllers\Admin\Post\IndexController::class)->name('posts');
    Route::get('/all/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('posts.show');
    Route::post('/all/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('posts.update');
    Route::post('/all', \App\Http\Controllers\Admin\Post\StoreController::class)->name('posts.store');
    Route::delete('/all/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('posts.delete');
    Route::get('/users', \App\Http\Controllers\Admin\User\IndexController::class)->name('users');
    Route::post('/users', \App\Http\Controllers\Admin\User\StoreController::class)->name('users.store');
    Route::delete('/users/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('users.delete');
    Route::get('/deleted', \App\Http\Controllers\Admin\Deleted\IndexController::class)->name('deleted');
    Route::post('/deleted/{delete}', \App\Http\Controllers\Admin\Deleted\UpdateController::class)->name('deleted.update');
});
