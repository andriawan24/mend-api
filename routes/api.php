<?php

use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\DiagnoseController;
use App\Http\Controllers\API\UserController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::middleware('auth:sanctum')->group(function() {
    Route::get('fetch', [UserController::class, 'fetch']);
    Route::put('profile/update', [UserController::class, 'updateProfile']);
    Route::get('articles', [ArticleController::class, 'index']);
    Route::post('diagnose', [DiagnoseController::class, 'diagnose']);
    Route::get('symptoms', [DiagnoseController::class, 'symptoms']);
    Route::get('diagnose/histories', [DiagnoseController::class, 'getHistories']);
});

// Get Image
Route::get('/image/{image}', [UserController::class, 'getImage']);
