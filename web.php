<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroler;
// use App\Http\Controllers\registration_controller;
use App\Http\Controllers\productController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/',[firstcontroler :: class,'view']);
// Route::get('/registration',[registration_controller::class,'index']);
// Route::post('/registration',[registration_controller::class,'store']);

Route::get('/',[productController::class,'index'])->name('products.index');
Route::get('/products/create',[productController::class,'create'])->name('products.create');
Route::post('/products/store',[productController::class,'store'])->name('products.store');

Route::get('products/{id}/edit',[productController::class,'edit']);
Route::put('products/{id}/update',[productController::class,'update']);
Route::get('products/{id}/delete',[productController::class,'destroy']);
Route::get('products/{id}/show',[productController::class,'show']);