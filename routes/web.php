<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/landing', function () {
    return view('home.landingpage', ['title' => 'Landing Page']);
});

Route::get('/', [DashboardController::class, 'switchView']);

//Route Create New Employee/Mitra Via SuperAdmin
Route::middleware(['auth', 'verified', 'role:superadmin'])->get('/create-employee' ,[AuthController::class,'CreateEmployeeView']);
Route::middleware(['auth', 'verified', 'role:superadmin'])->post('/create-employee' ,[AuthController::class,'CreateEmployee']);

//Route Confirmation Email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Route Send Notification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Route Resend Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Protected Route
Route::middleware(['auth', 'verified'])->get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::middleware(['auth', 'verified'])->get('/logout' ,[DashboardController::class,'logout'])->name('logout');