<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\JobTypeController;
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
    //job type
    Route::prefix('job-type')->group(function(){
        Route::get('/',[JobTypeController::class,'index'])->name('jobType');
    });
    //company
    Route::prefix('company')->group(function(){
        Route::get('/',[CompanyController::class,'index'])->name('company');
        Route::match(['GET','POST'],'/add', [CompanyController::class,'create'])->name('company.add');
        Route::match(['GET','POST'],'/edit/{id}', [CompanyController::class,'edit'])->name('company.edit');
        Route::get('/delete/{id}',[CompanyController::class,'delete'])->name('company.delete');
    });
});
