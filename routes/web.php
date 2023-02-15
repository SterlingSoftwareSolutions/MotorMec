<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientDashboardController;
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
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin'], function(){
        Route::get('dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin/dashboard');
    });

    Route::group(['middleware' => 'role:client'], function(){
        Route::get('dashboard', [ClientDashboardController::class, 'index'])
        ->name('dashboard');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
