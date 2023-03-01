<?php

use App\Http\Controllers\AdminDashboardController;
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

Route::group(['middleware' => 'auth'], function(){
    Route::get('profile', function(){
        return view('user.profile');
    });

    Route::resource('users', UserController::class);

    Route::group(['middleware' => 'role:admin,superadmin', 'prefix' => 'admin'], function(){
        Route::get('dashboard', [AdminDashboardController::class, 'index']);
    });

    Route::group(['middleware' => 'role:client'], function(){
        Route::get('dashboard', [ClientDashboardController::class, 'index']);
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/view/{view}', function($view){
    return view($view);
});