<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Feed\FeedController;
use Illuminate\Support\Facades\Route;

// Route::post('/feed/store', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/feeds', [FeedController::class, 'index'])->middleware('auth:sanctum');
Route::post('/feed/store', [FeedController::class, 'store'])->middleware('auth:sanctum');
Route::post('/feed/like/{feed_id}', [FeedController::class, 'likePost'])->middleware('auth:sanctum');
Route::post('/feed/comment/{feed_id}', [FeedController::class, 'comment'])->middleware('auth:sanctum');
Route::get('/feed/comments/{feed_id}', [FeedController::class, 'getComments'])->middleware('auth:sanctum');


Route::post('register', [AuthenticationController::class, 'register']);
Route::post('login', [AuthenticationController::class, 'login']);


