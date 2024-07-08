<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductsController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Auth\AuthController;





Route::post("login",[AuthController::class,"login"]);
Route::post("logout",[AuthController::class,"logout"]);
Route::post("register",[AuthController::class,"register"]);
Route::post("user",[AuthController::class,"user"])->middleware("auth:sanctum");


Route::prefix('admin')->group(function () {
    Route::apiResources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'categories.products'=>CategoryProductsController::class,
        'favorites' =>FavoriteController ::class,
    ]);
});

