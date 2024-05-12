<?php

use App\auth\controllers\AdminController;
use App\auth\controllers\UserController;
use App\basket\command\infrastructure\client\controller\BasketController;
use App\basket\command\infrastructure\client\controller\PromoCodeController;
use App\basket\query\infrastructure\client\controller\QueryBasketController;
use App\basket\query\infrastructure\client\controller\QueryPromoCodeController;
use App\contact\controllers\ContactFormController;
use App\favorites\infrastructure\client\controllers\FavoriteController;
use App\orders\query\infrastructure\client\QueryOrderController;
use App\products\infrastructure\client\controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\orders\command\infrastructure\client\controller\OrderController;

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
    Route::post('/basket/{productId}/{quantity}',[BasketController::class,'addToBasket'])->name('basket.add');
    Route::post('/basket/clear',[BasketController::class,'clear']);
    Route::post('/basket/{productId}/{quantity}/reduce',[BasketController::class,'reduceOneProduct']);
    Route::post('/basket-delete/{productId}',[BasketController::class,'deleteOneProduct']);
    Route::post('/basket-promoCode/apply/{promoCodeLabel}',[BasketController::class,'applyPromoCodeToBasket']);
    Route::post('/basket-promoCode/remove',[BasketController::class,'removePromoCodeInBasket']);
    Route::get('/basket/loadingView',function (){return view('components.basket');});
    Route::get('/basket',[QueryBasketController::class,'getTheBasketOfCurrentUser']);
    Route::get('/paymentInformation',[QueryBasketController::class,'getBasketPriceForPaymentInformation']);
    Route::post('/orderCreate',[OrderController::class,'changeBasketIntoOrder']);
    Route::get('/userProfile',[UserController::class,'profile'])->name('profile');
    Route::get('/userProfile/update',[UserController::class,'updateProfile']);
    Route::post('/userProfile/updateName',[UserController::class,'updateName'])->name('updateName');
    Route::post('/userProfile/updateAdress',[UserController::class,'updateAdress'])->name('updateAdress');
    Route::post('/userProfile/updatePassword',[UserController::class,'updatePassword'])->name('updatePassword');

});



Route::group(['middleware' => 'Admin'], function () {
    Route::get('/backOffice',[AdminController::class,'backOffice']);

    Route::get('/backOffice/products',[ProductController::class,'getAllProducts']);
    Route::post('/backOffice/addProduct',[ProductController::class,'addProduct']);
    Route::get('/backOffice/addProductForm',[ProductController::class,'getProductForm']);
    Route::get('/backOffice/products/{productId}',[ProductController::class,'getProductById']);
    Route::get('/backOffice/product/edit/{Id}',[ProductController::class,'getUpdateProductForm']);
    Route::post('/backOffice/updateProduct/{id}',[ProductController::class,'updateProduct']);
    Route::get('backOffice/products/delete/{id}',[ProductController::class,'deleteProduct']);

    Route::post('/backOffice/promoCode/add',[PromoCodeController::class,'addPromoCode']);
    Route::get('/backOffice/deletPromoCode/{label}',[PromoCodeController::class,'deletePromoCode']);
    Route::get('backOffice/promoCode',[QueryPromoCodeController::class,'getAllPromoCodes']);
    
    Route::get('/backOffice/users',[AdminController::class,'usersList']);
    Route::get('/backOffice/user/{id}',[AdminController::class,'adminProfile']);  
    Route::post('/backOffice/updateUser/{id}',[AdminController::class,'updateProfile']);
    Route::get('/backOffice/userDelete/{id}',[AdminController::class,'deleteUser']);

    Route::get('/backOffice/orders',[QueryOrderController::class,'getAllOrders']);
    Route::post('/backOffice/orders/{id}',[OrderController::class,'updateOrderStatus']);
});
