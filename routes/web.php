<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\JobTypeController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ShiftController;
use App\Http\Controllers\Client\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/job/{id}', [HomeController::class,'single'])->name('job');

Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin');
    //job
    Route::prefix('job')->group(function(){
        Route::get('/',[JobController::class,'index'])->name('job.index');
        Route::match(['GET','POST'],'/add', [JobController::class,'create'])->name('job.add');
        Route::match(['GET','POST'],'/edit/{id}', [JobController::class,'edit'])->name('job.edit');
        Route::get('/delete/{id}',[JobController::class,'delete'])->name('job.delete');
    });
    //job type
    Route::prefix('job-type')->group(function(){
        Route::get('/',[JobTypeController::class,'index'])->name('jobType');
    });
    //shift
    Route::prefix('shift')->group(function(){
        Route::get('/',[ShiftController::class,'index'])->name('shift');
    });
    //company
    Route::prefix('company')->group(function(){
        Route::get('/',[CompanyController::class,'index'])->name('company');
        Route::match(['GET','POST'],'/add', [CompanyController::class,'create'])->name('company.add');
        Route::match(['GET','POST'],'/edit/{id}', [CompanyController::class,'edit'])->name('company.edit');
        Route::get('/delete/{id}',[CompanyController::class,'delete'])->name('company.delete');
    });
    //location
    Route::prefix('location')->group(function(){
        Route::get('/',[LocationController::class,'index'])->name('location');
        Route::match(['GET','POST'],'/add', [LocationController::class,'create'])->name('location.add');
        Route::match(['GET','POST'],'/edit/{id}', [LocationController::class,'edit'])->name('location.edit');
        Route::get('/delete/{id}',[LocationController::class,'delete'])->name('location.delete');
    });
});
