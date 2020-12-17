<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
Route::get('/',[UserController::class,'welcome']);
Route::get('/login',[UserController::class,'index']);
Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductsController::class,'index']);
Route::get('/detail/{id}',[ProductsController::class,'detail']);
Route::get('/search',[ProductsController::class,'search']);