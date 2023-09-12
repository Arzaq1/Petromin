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
//Route::get('الوتر ','الكنترول@الداله');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {

    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/login_me', [App\Http\Controllers\HomeController::class, 'login_me'])->name('login_me');
//Route::get('/calender.home', [App\Http\Controllers\CalenderController::class, 'index'])->name('calender.home');
Route::get('events/{event?}/home',[App\Http\Controllers\EventController::class, 'showevents'])->name('events.showevents');
Route::get('home', 'HomeController@showevents')->name('home');

Route::get('home/{id}',[App\Http\Controllers\HomeController::class, 'showevents'])->name('showevents');
/*Route::get('/index/{month}', function ($month) {
    $events = Event::whereMonth('start_date', $month)->get();

    return view('index', ['events' => $events]);
});*/

//Route::get('/home/{id}',[App\Http\Controllers\HomeController::class, 'nextMonth'])->name('nextMonth');
//Route::get('/home/{id}',[App\Http\Controllers\HomeController::class, 'PrevMonth'])->name('PrevMonth');

Route::resource('events', 'EventController');
/*Route::get('events/{event?}/edit', 'EventController@edit')->name('events.edit');
Route::put('events/{event}', 'EventController@update')->name('events.update');
Route::get('events/index', 'EventController@index')->name('events.index');
*/
Route::get('/store',[App\Http\Controllers\EventController::class, 'store'])->name('events.store');
Route::get('events/index',[App\Http\Controllers\EventController::class, 'index'])->name('events.index');
Route::get('events/{event?}/edit',[App\Http\Controllers\EventController::class, 'edit'])->name('events.edit');
Route::get('events/delete/{id}',[App\Http\Controllers\EventController::class, 'delete'])->name('events.delete');
Route::put('events/update/{id}',[App\Http\Controllers\EventController::class, 'update'])->name('events.update');

