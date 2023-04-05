<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RemindController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\ScheduleController;




Route::controller(RemindController::class)->middleware('auth')->group(function() {
    Route::get('reminds', 'index')->name('reminds.index');
    Route::post('reminds', 'store')->name('reminds.store');
    Route::get('reminds/{remind}/edit', 'edit')->name('reminds.edit');
    Route::put('reminds/{remind}', 'update')->name('reminds.update');
    Route::delete('reminds/{remind}', 'destroy')->name('reminds.destroy');
});


Route::controller(TaskController::class)->middleware('auth')->group(function() {
    Route::get('/tasks', 'indexHome')->name('tasks.home');
    Route::get('/folders/{id}/tasks', 'index')->name('tasks.index');
    Route::get('/folders/{id}/tasks/create', 'showCreateForm')->name('tasks.create');
    Route::post('/folders/{id}/tasks/create', 'create');
    Route::get('/folders/{id}/tasks/{task_id}/edit', 'showEditForm')->name('tasks.edit');
    Route::post('/folders/{id}/tasks/{task_id}/edit', 'edit');
    Route::get('/folders/{id}/tasks/{task_id}/destroy', 'destroy')->name('tasks.destroy');
});

Route::controller(FolderController::class)->middleware('auth')->group(function() {
    Route::get('/folders/create', 'showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'create');

});

Route::post('/schedule-add', [ScheduleController::class, 'scheduleAdd'])->name('schedule-add');
Route::post('/schedule-get', [ScheduleController::class, 'scheduleGet'])->name('schedule-get');
Route::post('/remind-get', [RemindController::class, 'remindGet'])->name('remind-get');
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

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

Route::get('/', function () {
    return view('top');
});
