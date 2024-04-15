<?php

use App\auth\controllers\UserController;
use App\basket\infrastructure\client\controller\BasketController;
use App\contact\controllers\ContactFormController;
use App\favorites\infrastructure\client\controllers\FavoriteController;
use App\products\infrastructure\client\controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']);
Route::get('/about',function(){return view("about");});
Route::get('/rules',function(){return view("rules");});
Route::get('/contactMail',function(){return view('contactMail');});
Route::get('/product/{id}',[ProductController::class,'getById']);
Route::get('/check-auth',[UserController::class,'checkAuth']);



Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [UserController::class, 'register']);
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/contactUs',[ContactFormController::class,'showContactForm']);
    Route::post('/contactUs',[ContactFormController::class,'submit'])->name('send.mail');
    Route::post('/product/{id}/favorite',[FavoriteController::class,'addToFavorite']);
    Route::post('/product/{id}/favorite/remove',[FavoriteController::class,'removeFromFavorites']);
    Route::get('/basket/{productId}/{quantity}',[BasketController::class,'addToBasket']);
    Route::get('/basket/clear',[BasketController::class,'clear']);
    Route::get('/basket/{productId}/{quantity}/reduce',[BasketController::class,'reduceOneProduct']);
    Route::get('/basket-delete/{productId}',[BasketController::class,'deleteOneProduct']);
    Route::get('/basket-promoCode/apply/{promoCodeLabel}',[BasketController::class,'applyPromoCodeToBasket']);
    Route::get('/basket-promoCode/remove',[BasketController::class,'removePromoCodeInBasket']);
});



Route::group(['middleware' => 'admin'], function () {

});
