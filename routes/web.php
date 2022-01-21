<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfilController;
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

Route::get('/',[FrontController::class,"home"])->name("home");

Route::get('/portfolio',[FrontController::class,'portfolio'])->name("portfolio");

Route::get('/admin/dashboard',[FrontController::class,'admin'])->name("admin");

// back admin

Route::get('/admin/profils',[ProfilController::class,"index"])->name("profils.index");

Route::get('/admin/profils/create',[ProfilController::class,"create"])->name("profils.create");

Route::post('/admin/profils/store',[ProfilController::class,"store"])->name("profils.store");


