<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[StudentController::class,'index']);
Route::post('/import',[StudentController::class,'import']);

