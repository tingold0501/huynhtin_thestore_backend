<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(RoleController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/getRolesNotActive', 'getRolesNotActive');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/getallproducts', 'index');
});