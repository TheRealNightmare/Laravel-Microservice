<?php
use App\Http\Controllers\GatewayController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [GatewayController::class, 'registerUser']);
Route::get('/users', [GatewayController::class, 'getAllUsers']);
Route::post('/posts', [GatewayController::class, 'createPost']);
Route::get('/posts', [GatewayController::class, 'getAllPosts']);
