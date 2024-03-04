<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\GeneralController;




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

Route::get('/', [GeneralController::class, 'homepage'])->name('index');

Route::get('/character', function () {
    return view('character');
})->name('character');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgot'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendEmail'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'reset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPass'])->middleware('guest')->name('password.update');


    // For admin-only routes
    Route::middleware(['auth', 'role:admin'])->group(function () {
        // Admin routes here
    });



// For user-only routes
Route::middleware(['auth', 'role:user'])->group(function () {
    // User routes here
});


// Sa middleware lahat ng naka route dito need naka login kaya pag hindi mo ma call ung page ilabas mo lang sa middle ware
Route::middleware(['auth'])->group(function () {

    // Dashboard Section
    Route::get('/dashboard', [GeneralController::class, 'index'])->name('dashboard');


    // Publish Section

    Route::put('/publish/{id}', [PublishController::class, 'update'])->name('publish.update');


    Route::get('/publish', [PublishController::class, 'index'])->name('publish.index');
    Route::post('/publish/store', [PublishController::class, 'store'])->name('publish.store');

    Route::get('/publish/edit/{id}', [PublishController::class, 'edit'])->name('publish.edit');
    Route::get('/publish/view/{id}', [PublishController::class, 'show'])->name('publish.view');

    Route::delete('/publish/destroy/{id}', [PublishController::class, 'destroy'])->name('publish.destroy');


    // Users Section
    Route::get('/users',[UserController::class, 'index'])->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

    Route::get('/users/view/{id}', [UserController::class, 'show'])->name('users.view');

    Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');




    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');

    //Forgot Password




});
