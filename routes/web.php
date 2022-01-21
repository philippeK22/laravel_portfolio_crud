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

Route::delete('/admin/profils/{id}/destroy',[ProfilController::class,"destroy"])->name("profils.destroy");

Route::get('/admin/profils/{id}/show',[ProfilController::class,"show"])->name("profils.show");

Route::get('/admin/profils/{id}/edit',[ProfilController::class,"edit"])->name("profils.edit");

Route::put('/admin/profils/{id}/update',[ProfilController::class,"update"])->name("profils.update");
