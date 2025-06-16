<?php

use App\Http\Controllers\AccountLoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
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

// Home Frontend work of ecommerce website zamzam
Route::get("/",[WelcomeController::class,"index"])->name("Home.welcome");
Route::get("/products",[ProductsController::class,"index"])->name("Home.products");
Route::get("/login",[LoginController::class,"index"])->name("auth.login");

// Backend of ecommerce website zamzam

Route::get("/dashboard", [DashboardController::class, "index"])
    ->middleware('auth') // ✅ Protect dashboard
    ->name("Dashboard.admin.dashboard");

Route::get("/accountlogin", [AccountLoginController::class, "index"])
    ->middleware('guest') // ✅ Only guest (not logged-in users) can access login
    ->name("login");

Route::post("/accountlogin", [AccountLoginController::class, "store"])
    ->middleware('guest') // ✅ Only guest can submit login form
    ->name("auth.accountlogin.store");

Route::post("/logout", [AccountLoginController::class, "logout"])
    ->middleware('auth') // ✅ Only logged-in users can logout
    ->name("logout");

Route::get("/categories",[CategoriesController::class,"index"])->name("Dashboard.admin.categories.index");
Route::get("/categories/add",[CategoriesController::class,"add"])->name("Dashboard.admin.categories.add");
