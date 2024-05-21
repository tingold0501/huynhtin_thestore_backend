<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(RoleController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/getRolesNotActive', 'getRolesNotActive');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/getallproducts', 'index');
    Route::get('/getProductsLatest', 'getProductsLatest');
});
Route::controller(ProductTypeController::class)->group(function () {
    Route::get('/getallproductTypes', 'index');
    Route::get('/getProductsByType/{id}', 'getProductsByType');
});