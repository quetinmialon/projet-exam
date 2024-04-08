<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactFormController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProductController::class,'index']);
Route::get('/about',function(){return view("about");});
Route::get('/rules',function(){return view("rules");});
Route::get('/contactUs',[ContactFormController::class,'showContactForm']);
Route::post('/contactUs',[ContactFormController::class,'submit'])->name('send.mail');
Route::get('/contactMail',function(){return view('contactMail');});
