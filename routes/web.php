<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ClientDashboardController;
use App\Http\Controllers\UserController;
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


// Common Routes 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

#TODO Remove This
// testing purposes 
Route::get('/view/{view}', function ($view) {
    return view($view);
});

// All the routes for the logged in users 
Route::group(['middleware' => 'auth'], function () {

    // user profile 
    Route::get('profile', function () {
        return view('userProfile');
    });

    Route::get('create-application', [ApplicationController::class, 'create']);

    Route::get('applications', [ApplicationController::class, 'index']);

    Route::group(['middleware' => 'role:admin,superadmin', 'prefix' => 'admin'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index']);
    });

    Route::group(['middleware' => 'role:client'], function () {
        Route::get('dashboard', [ClientDashboardController::class, 'index']);
    });
});