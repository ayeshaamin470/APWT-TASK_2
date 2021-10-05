<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\registrationController;

Route::get('/', function () {
    return view('test');
});
Route::get('/login',[loginController::class,'Create'])->name('login');
Route::post('/login',[loginController::class,'createSubmit'])->name('login');

Route::get('/contact',[contactController::class,'create'])->name('contact');
Route::post('/contact',[contactController::class,'createSubmit'])->name('contact');

Route::get('/registration',[registrationController::class,'create'])->name('registration');
Route::post('/registration',[registrationController::class,'createSubmit'])->name('registration');
