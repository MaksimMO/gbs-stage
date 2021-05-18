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


Auth::routes();

Route::post('/feedback-form',[App\Http\Controllers\HomeController::class, 'storeLead']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/gbs-user-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::get('/update-data/{id}', [App\Http\Controllers\AdminController::class, 'checkLead'])->name('edit-lead');
Route::put('/update-data/{id}', [App\Http\Controllers\AdminController::class, 'updateLead'])->name('update-lead');

// Redirect on registration
Route::get('/register', function() {
    return redirect('/login');
});
Route::post('/register', function() {
    return redirect('/login');
});
