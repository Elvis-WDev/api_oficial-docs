<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/** PERSONAL API TOKENS WITH SANCTUM! */

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('categories', [CategoryController::class, 'getUserCategories']);
    Route::get('categories/destroy/{id}', [CategoryController::class, 'destroyCategory']);
    Route::put('categories/edit', [CategoryController::class, 'editCategory']);
    Route::get('categories/articles', [ArticleController::class, 'getUserArticles']);
    Route::post('categories/articles/create', [ArticleController::class, 'storeArticles']);
    Route::put('categories/articles/edit', [ArticleController::class, 'editArticles']);
    Route::get('categories/articles/destroy/{id}', [ArticleController::class, 'destroyArticle']);
    Route::post('categories/create', [CategoryController::class, 'storeCategory']);
    Route::get('categories/{id}/articles', [ArticleController::class, 'getUserArticlesByCategories']);
    Route::get('logout', [AuthController::class, 'logout']);
});

Route::fallback(function () {
    return response()->json([
        'message' => 'Not found.'
    ], 404);
});