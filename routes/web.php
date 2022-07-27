<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParticipantController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// EVENT CONTROLLER

Route::get('/events',[EventsController::class, 'index'])->name('events.index');

Route::get('/events/tambah-event',[EventsController::class, 'create'])->name('events.create');
Route::post('/events/store-event',[EventsController::class, 'store'])->name('events.store');

Route::get('/events/edit-event/{id}',[EventsController::class, 'edit'])->name('events.edit');
Route::post('/events/update-event',[EventsController::class, 'update'])->name('events.update');

Route::get('/events/delete-event/{id}',[EventsController::class, 'delete'])->name('events.delete');





// PARTICIPANT CONTROLLER

Route::get('/participant/tambah-participant/{id}',[ParticipantController::class, 'create'])->name('participant.create');
Route::post('/participant/store-participant',[ParticipantController::class, 'store'])->name('participant.store');


