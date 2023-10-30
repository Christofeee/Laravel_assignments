<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carsController;
use App\Http\Controllers\bikesController;
use App\Http\Controllers\companiesController;

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

Route::get('/cars', [carsController::class,'index']);

Route::get('/bikes', [bikesController::class,'index']);

Route::get('/companies', [companiesController::class,'index']);
