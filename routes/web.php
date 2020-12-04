<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});


Route::view("/login","login");
Route::view("/register","register");
Route::view("/profile","profile");
Route::view("/edit","edit");
Route::post("login",[UserController::class,'login']);
Route::post("update/{id}",[UserController::class,'update']);
Route::post("register",[UserController::class,'register']);
Route::get("user_delete",[UserController::class,'destroy']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']); 
Route::get("myorder",[ProductController::class,'myOrder']);  




 






