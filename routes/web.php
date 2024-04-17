<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\periodController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addteacher', function (){
    return view ('teachers');
});

Route::post('/addDB',[periodController::class, 'store']);
Route::get('/view', [periodController::class, 'index']);

Route::get('/delete/{id}', [periodController::class, 'destroy']);

Route::get('/update/{id}', [periodController::class, 'edit']);
Route::post('/edited/{id}', [periodController::class, 'update']);

Route::get('/addstudent', function(){
    return view ('students');
});

Route::post('/student', [StudentController::class, 'store']);
Route::get('/viewstu', [StudentController::class, 'index']);

Route::get('/delete/{id}', [StudentController::class, 'destroy']);

Route::get('/update/{id}', [StudentController::class, 'edit']);
Route::post('/edited/{id}', [StudentController::class, 'update']);


Route::get('/product',function(){
    return view ('product');
});

Route::post('/details', [productController::class, 'store']);
Route::get('/viewpro', [productController::class, 'index']);

Route::get('/delete/{id}', [productController::class, 'destroy']);
Route::get('/update/{id}', [productController::class, 'edit']);
Route::post('/edited/{id}', [productController::class, 'update']);



