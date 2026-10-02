<?php

use App\Http\Controllers\mailcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [SellerController::class, 'list']);
Route::get('/hasmany',[SellerController::class,'manyrel']);
Route::get('/manytomany',[SellerController::class,'manytomany']);
Route::get('send-email',[mailcontroller::class,'sendEmail']);