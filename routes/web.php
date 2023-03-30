<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RemindController;
use App\Http\Controllers\TaskController;



Route::controller(RemindController::class)->middleware('auth')->group(function() {
    Route::get('reminds', 'index')->name('reminds.index');
    Route::post('reminds', 'store')->name('reminds.store');
    Route::get('reminds/{remind}/edit', 'edit')->name('reminds.edit');
    Route::put('reminds/{remind}', 'update')->name('reminds.update');
    Route::delete('reminds/{remind}', 'destroy')->name('reminds.destroy');
});


/*
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/top', [App\Http\Controllers\TopController::class, 'index'])->name('top');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth')->name('user');

Route::get('/guide', [App\Http\Controllers\GuideController::class, 'index'])->name('guide');

Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->middleware('auth')->name('task');

// Route::get('{any}', function () {
//     return view('layouts.app');
// })->where('any','.*');


Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->middleware('auth')->name('calendar');

Route::get('/', function () {
    return view('top');
});
