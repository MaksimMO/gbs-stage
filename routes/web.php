<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Admin\SchoolClassesController;
use App\Http\Controllers\Admin\CalendarController;

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


Route::get('/{main?}', function () {
    return view('index');
})->where('main', 'main\-[g|b|s|]');

Route::get('/team-g', function () {
    return view('index');
});

Route::get('/about-us-g', function () {
    return view('index');
});

Route::get('/simulators-g', function () {
    return view('index');
});
Route::get('/tickets-g', function () {
    return view('index');
});

Route::get('/contacts-g', function () {
    return view('index');
});
Route::get('/contacts-b', function () {
    return view('index');
});
Route::get('/contacts-s', function () {
    return view('index');
});
Route::get('/schedule-gbs', function () {
    return view('index');
});

Route::get('/my-account', function () {
    return view('index');
});
Route::get('/schedule-widget-app', function () {
    // return view('index');
    return view('schedule-widget');
});


Route::get('/areas-g/{id?}', function () {
    return view('index');
})->where('id', '[1|2|3|4]');

Route::get('/areas-s/{id?}', function () {
    return view('index');
})->where('id', '[1|2|3|4|5|6|7]');

Route::get('/price-b', function () {
    return view('index');
});
Route::get('/price-s', function () {
    return view('index');
});



Auth::routes();

Route::post('/feedback-form',[App\Http\Controllers\HomeController::class, 'storeLead']);

Route::group(['prefix' => 'gbs-admin'], function () {
	/**
	 * Leads routes
	 */
	Route::get('/', [AdminController::class, 'index'])->name('dashboard');
	Route::get('/update-data/{id}', [AdminController::class, 'checkLead'])->name('edit-lead');
	Route::put('/update-data/{id}', [AdminController::class, 'updateLead'])->name('update-lead');

	/**
	 * Schedule routes
	 */
// Users
	Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
	Route::resource('users', UsersController::class);

// Lessons
	Route::delete('schedule/destroy', [LessonsController::class, 'massDestroy'])->name('schedule.massDestroy');
	Route::resource('schedule', LessonsController::class);

// School Classes
	Route::delete('workouts/destroy', [SchoolClassesController::class, 'massDestroy'])->name('workouts.massDestroy');
	Route::resource('workouts', SchoolClassesController::class);

	Route::get('calendar', [CalendarController::class, 'index'])->name('calendar.index');
});

Route::get('show-schedule', [CalendarController::class, 'showSchedule'])->name('calendar.showSchedule');

// Redirect on registration
/*Route::get('/register', function() {
    return redirect('/login');
});*/
