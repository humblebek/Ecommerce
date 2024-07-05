<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductsController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('admin')->group(function () {
    Route::apiResources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'categories.products'=>CategoryProductsController::class,
    ]);
});

