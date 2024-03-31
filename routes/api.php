<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1'], function () {
    Route::get('product-api', [ProductController::class, 'index']);
});

/**
 * route resource posts
 */
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);