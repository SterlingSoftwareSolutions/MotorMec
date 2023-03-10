<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BillController;
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

    //Create Applications
    Route::get('create-application', [ApplicationController::class, 'show_Step_one']);//Show Step one
    Route::post('create_step_one', [ApplicationController::class, 'create_form_step_one']);//Save Step one and Show Step one

    Route::get('create-application_2', [ApplicationController::class, 'show_Step_two']);//Show Step Two
    Route::post('create_step_two', [ApplicationController::class, 'create_form_step_two']);//Save Step Two and Show Step Three

    Route::get('create-application_3', [ApplicationController::class, 'show_Step_three']);//Show Step Three
    Route::post('create_step_three', [ApplicationController::class, 'create_form_step_three']);//Save Step Three and Complete


    //View Applications
    Route::get('applications', [ApplicationController::class, 'list']);

    Route::group(['middleware' => 'role:admin,superadmin', 'prefix' => 'admin'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index']);
    });

    //Billing
    Route::get('billing', [BillController::class, 'index']);

    Route::group(['middleware' => 'role:client'], function () {
        Route::get('dashboard', [ClientDashboardController::class, 'index']);
    });
});
