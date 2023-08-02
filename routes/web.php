<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactUsFormController;
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


Route::get('/',[WebController::class,'index']);

Route::get('/about',[WebController::class,'about'])->name('about');
Route::get('/terms-and-conditions',[WebController::class,'terms'])->name('terms');
Route::get('/policy',[WebController::class,'policy'])->name('policy');
Route::get('/careers',[WebController::class,'career'])->name('career');


// career routes
Route::get('/customer-screening-specialist-position',[WebController::class,'customerScreening'])->name('customer-screening-specialist');
Route::get('/human-resource-position',[WebController::class,'humanResource'])->name('human-resource');
Route::get('/admin-position',[WebController::class,'admin'])->name('admin');
Route::get('/it-technician-position',[WebController::class,'technician'])->name('it-technician');


// contact form routes
Route::get('/contact',[ContactUsFormController::class,'createForm'])->name('contact');
Route::post('/contact',[ContactUsFormController::class,'storeForm'])->name('contact.store');
Route::get('/success',[ContactUsFormController::class,'successForm'])->name('contact.success');
