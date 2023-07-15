<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// show home page
Route::get('/', [HomeController::class, 'index']);

// Admin routes
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    // show create form
    Route::get('/event/create', [EventController::class, 'create']);
    // store event
    Route::post('/event', [EventController::class, 'store']);
    // show edit form
    Route::get('/event/{event}/edit', [EventController::class, 'edit']);
    // update event
    Route::put('/event/{event}', [EventController::class, 'update']);
    // delete event
    Route::delete('/event/{event}', [EventController::class, 'destroy']);


    // show create blog form
    Route::get('/blog/create', [BlogController::class, 'create']);
    // store blog
    Route::post('/blog', [BlogController::class, 'store']);
    // show edit blog form
    Route::get('/blog/{blog}/edit', [BlogController::class, 'edit']);
    // update blog
    Route::put('/blog/{blog}', [BlogController::class, 'update']);
    // delete blog
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy']);
});

// show blog detail
Route::get('/blog/{blog}', [BlogController::class, 'show']);
// show event detail
Route::get('/event/{event}', [EventController::class, 'show']);

// show register form
Route::get('/registerForm', [UserController::class, 'create'])->middleware('guest');
// store new user
Route::post('/users', [UserController::class, 'store']);
//logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//login user form
Route::get('/loginForm', [UserController::class, 'loginForm'])->name('login')->middleware('guest');
//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

require __DIR__ . '/auth.php';
