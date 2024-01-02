<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client/index');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin');
    //job
    Route::prefix('job')->group(function(){
        Route::get('/',[JobController::class,'index'])->name('job');
    });
});