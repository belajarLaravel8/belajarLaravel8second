<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParticipantsController;
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

Route::get('/events', function () {
    // return view('events');
    return 'Events Okay!!';
});

Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/events/add-events', [EventsController::class, 'create'])->name('events.create');
Route::post('/events/store-events', [EventsController::class, 'store'])->name('events.store');

Route::get('/events/edit-events/{id}', [EventsController::class, 'edit'])->name('events.edit');
Route::post('/events/update-events', [EventsController::class, 'update'])->name('events.update');

Route::get('/events/delete-events/{id}', [EventsController::class, 'delete'])->name('events.delete');

Route::get('/participants/{id_event}', [ParticipantsController::class, 'index'])->name('participants.index');

Route::get('/participants/create/{id_event}', [ParticipantsController::class, 'create'])->name('participants.create');
Route::post('/participants/store-events', [ParticipantsController::class, 'store'])->name('participants.store');

Route::get('/participants/edit/{id_participants}', [ParticipantsController::class, 'edit'])->name('participants.edit');
Route::post('/participants/update/', [ParticipantsController::class, 'update'])->name('participants.update');

Route::get('/participants/delete-participants/{id_participants}', [ParticipantsController::class, 'delete'])->name('participants.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
