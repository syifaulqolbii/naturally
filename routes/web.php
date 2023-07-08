<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
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
Route::get('/', [EventController::class, 'index']);
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


// show event detail
Route::get('/event/{event}', [EventController::class, 'show']);

require __DIR__.'/auth.php';
