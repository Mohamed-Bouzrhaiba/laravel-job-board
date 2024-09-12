<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\RegistredUserController;

Route::get('/',[JobController::class,'index']);
//job add
Route::get('/jobs/create',[JobController::class,'create'])->middleware('auth');
Route::post('/jobs',[JobController::class,'store'])->middleware('auth');

//search Routes
Route::get('/search',searchController::class);
Route::get('/tags/{tag:name}',tagController::class);
//Auth Routes

Route::middleware('guest')->group(function(){
    Route::get('/register',[RegistredUserController::class,'create']);
    Route::post('/register',[RegistredUserController::class,'store']);
    Route::get('/login',[AuthUserController::class,'create']);
    Route::post('/login',[AuthUserController::class,'store']);
});


Route::delete('/logout',[AuthUserController::class,'destroy'])->middleware('auth');
