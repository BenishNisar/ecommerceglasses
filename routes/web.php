<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/",[WelcomeController::class,"index"])->name("Home.welcome");
Route::get("/products",[ProductsController::class,"index"])->name("Home.products");
Route::get("/login",[LoginController::class,"index"])->name("auth.login");

