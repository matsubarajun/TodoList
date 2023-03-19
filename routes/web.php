<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RemindController;
Route::controller(RemindController::class)->group(function() {
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

Route::resource('/reminds', RemindController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});



Auth::routes();
Route::get('/remind', [RemindController::class, 'index'])->name('remind.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
