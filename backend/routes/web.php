<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public routes
Route::get('/', function() {
    return redirect()->route('home');
});
Route::get('/home', [HomeController::class, 'vision'])->name('home');
Route::get('/what-we-do', [HomeController::class, 'vision'])->name('vision');
Route::get('/who-we-are', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/works', [HomeController::class, 'works'])->name('works');

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('films', FilmController::class);

Auth::routes();

// Protected routes
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('films', FilmController::class);
});

