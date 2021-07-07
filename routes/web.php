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

Route::get('/{level?}', function () {
    return view('index');
})->where('level', 'level\-[g|b|s|]');


Auth::routes();

Route::post('/feedback-form',[App\Http\Controllers\HomeController::class, 'storeLead']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

/**
 * Leads routes
 */
Route::get('/gbs-user-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::get('/update-data/{id}', [App\Http\Controllers\AdminController::class, 'checkLead'])->name('edit-lead');
Route::put('/update-data/{id}', [App\Http\Controllers\AdminController::class, 'updateLead'])->name('update-lead');

/**
 * Schedule routes
 */
//Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('list');

	// Users
	Route::delete('users/destroy', 'App\Http\Controllers\Admin\UsersController@massDestroy')->name('users.massDestroy');
	Route::resource('users', 'App\Http\Controllers\Admin\UsersController');

	// Lessons
	Route::delete('schedule/destroy', 'App\Http\Controllers\Admin\LessonsController@massDestroy')->name('schedule.massDestroy');
	Route::resource('schedule', 'App\Http\Controllers\Admin\LessonsController');

	// School Classes
	Route::delete('workouts/destroy', 'App\Http\Controllers\Admin\SchoolClassesController@massDestroy')->name('workouts.massDestroy');
	Route::resource('workouts', 'App\Http\Controllers\Admin\SchoolClassesController');

// Redirect on registration
/*Route::get('/register', function() {
    return redirect('/login');
});*/
