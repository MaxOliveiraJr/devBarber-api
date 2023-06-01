<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/refresh', [AuthController::class, 'refresh'] );
Route::post('users', [AuthController::class, 'create ']);

Route::get('/users', [UserController::class, 'read']);
Route::get('/users/favorites', [UserController::class, 'getFavorites']);
Route::post('/users/favorites', [UserController::class, 'addFavorites']);
Route::get('/users/appointments', [UserController::class, 'getAppointments']);
Route::post('/users/appointments', [UserController::class, 'addAppointments']);

Route::get('/barbers', [BarberController::class, 'list']);
Route::get('/barber/{id}', [BarberController::class, 'one']);
Route::post('/barber/{id}/appointment', [BarberController::class, 'one']);

Route::get('search', [BarberController::class, 'search']);
