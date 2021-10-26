<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\InventoryController;


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

// public that all people can look and delete edit 
// Route::resource('posts',PostController::class);

// Public route
Route::get('posts',[PostController::class,'index']);
Route::get('posts/{id}',[PostController::class,'show']);

//  Permissinon routes
Route::post('posts',[PostController::class,'store']);
Route::put('posts/{id}',[PostController::class,'update']);
Route::delete('posts/{id}',[PostController::class,'destroy']);


// Public route
Route::get('story',[StoryController::class,'index']);
Route::get('story/{id}',[StoryController::class,'show']);

//  Permissinon routes
Route::post('story',[StoryController::class,'store']);
Route::put('story/{id}',[StoryController::class,'update']);
Route::delete('story/{id}',[StoryController::class,'destroy']);

// Public route
Route::get('/inventory',[InventoryController::class,'index']);
Route::get('/inventory/{id}',[InventoryController::class,'show']);

//  Permissinon routes
Route::post('/inventory',[InventoryController::class,'store']);
Route::put('/inventory/{id}',[InventoryController::class,'update']);
Route::delete('/inventory/{id}',[InventoryController::class,'destroy']);


