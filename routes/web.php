<?php

use App\Http\Controllers\JalurController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//ini adalah route tanpa mvc 
Route::get('jalurbaru', function (){ 
    return 'ini jalur baru tanpa MVC';
});


//ini adalah route menggunakan mvc 
Route::get('/jalurview', function () {
    return view('viewjalur');
});

// Ini adalah route menggunakan view & controller
Route::get('/jalurcontroller',[JalurController::class,'index']);


// Ini adalah route menggunakan controller & model
Route::get('/jalurmodel',[JalurController::class,'MenampilkanDataMode']);


// Ini adalah route menggunakan controller & biodata
Route::get('/jalurbiodata',[BiodataController::class,'MenampilkanBiodata']);