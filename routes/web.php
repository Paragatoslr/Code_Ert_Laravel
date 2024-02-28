<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublishController;


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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/character', function () {
    return view('character');
})->name('character');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    // Dashboard Section
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');


    // Publish Section

    Route::get('/publish', [PublishController::class, 'index'])->name('publish.index');
    Route::post('/publish/store', [PublishController::class, 'store'])->name('publish.store');

    Route::get('/publish/edit/{id}', [PublishController::class, 'edit'])->name('publish.edit');
    Route::get('/publish/view/{id}', [PublishController::class, 'show'])->name('publish.view');

    // Users Section
    Route::get('/users',[UserController::class, 'index'])->name('users.index');

    Route::get('/users/create', function() {
        return view('admin.users.create');
    })->name('users.create');

    Route::get('/users/view', function() {
        return view('admin.users.view');
    })->name('users.view');

    Route::get('/users/edit', function() {
        return view('admin.users.edit');
    })->name('users.edit');

});
