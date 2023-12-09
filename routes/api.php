<?php

use App\Http\Controllers\PostController;
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
Route::get('/posts', [PostController::class, 'index']);
Route::get('/postsResource', [PostController::class, 'getResource']);
Route::get('/show/{id}', [PostController::class, 'show']);
Route::get('/show2/{id}', [PostController::class, 'show2']);