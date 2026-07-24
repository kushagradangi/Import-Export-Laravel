<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[StudentController::class,'index']);
Route::post('/import',[StudentController::class,'import'])->name('import');

