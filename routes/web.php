<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('LandingPage');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

Route::get('/add_doctor_view',[AdminController::class,'Addview']) ;
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/cancel/{id}',[AdminController::class,'cancel']);
Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendmail/{id}',[AdminController::class,'sendmail']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/showuser',[AdminController::class,'showuser']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);


Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);