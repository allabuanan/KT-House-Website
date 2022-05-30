<?php

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiFilmController;

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

// Public routes

Route::post('/register', [ApiAuthController::class, 'register']);

Route::post('/login', [ApiAuthController::class, 'login']);

// USERS (GET, SHOW)
Route::get('/users', [ApiUserController::class, 'index']);

Route::get('/users/{user}', [ApiUserController::class, 'show']);

// FILMS (GET, SHOW)
Route::get('/films', [ApiFilmController::class, 'index']);

Route::get('/films/{film}', [ApiFilmController::class, 'show']);




// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::post('/logout', [ApiAuthController::class, 'logout']);

    // USERS (POST, PUT, DELETE)

    Route::post('/users', [ApiUserController::class, 'store']);

    Route::put('/users/{user}', [ApiUserController::class, 'update']);

    Route::delete('/users/{user}', [ApiUserController::class, 'destroy']);

    // FILMS (POST, PUT, DELETE)

    Route::post('/films', [ApiFilmController::class, 'store']);

    Route::put('/films/{film}', [ApiFilmController::class, 'update']);

    Route::delete('/films/{film}', [ApiFilmController::class, 'destroy']);
    
    
});
