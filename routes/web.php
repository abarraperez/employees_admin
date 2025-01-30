<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/agenda', \App\Http\Controllers\AgendaController::class)->name('agenda'); 

Route::get('/events', [\App\Http\Controllers\AppointmentController::class, "index"])->name('events.index'); 
Route::post('/events', [\App\Http\Controllers\AppointmentController::class, "store"])->name('events.store');
Route::get('/events/{appointment}', [\App\Http\Controllers\AppointmentController::class, "show"])->name('events.show');
Route::get('/events/{appointment}/edit', [\App\Http\Controllers\AppointmentController::class, "edit"])->name('events.edit');
Route::put('/events/{appointment}', [\App\Http\Controllers\AppointmentController::class, "update"])->name('events.update');
Route::delete('/events/{appointment}', [\App\Http\Controllers\AppointmentController::class, "destroy"])->name('events.destroy');
