<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SkillController;
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

// back admin Profil controller

Route::get('/admin/profils',[ProfilController::class,"index"])->name("profils.index");

Route::get('/admin/profils/create',[ProfilController::class,"create"])->name("profils.create");

Route::post('/admin/profils/store',[ProfilController::class,"store"])->name("profils.store");

Route::delete('/admin/profils/{id}/destroy',[ProfilController::class,"destroy"])->name("profils.destroy");

Route::get('/admin/profils/{id}/show',[ProfilController::class,"show"])->name("profils.show");

Route::get('/admin/profils/{id}/edit',[ProfilController::class,"edit"])->name("profils.edit");

Route::put('/admin/profils/{id}/update',[ProfilController::class,"update"])->name("profils.update");


// back admin skills controller

Route::get('/admin/skills',[SkillController::class,"index"])->name("skills.index");

Route::get('/admin/skills/create',[SkillController::class,"create"])->name("skills.create");

Route::post('/admin/skills/store',[SkillController::class,"store"])->name("skills.store");

Route::delete('/admin/skills/{id}/destroy',[SkillController::class,"destroy"])->name("skills.destroy");

Route::get('/admin/skills/{id}/show',[SkillController::class,"show"])->name("skills.show");

Route::get('/admin/skills/{id}/edit',[SkillController::class,"edit"])->name("skills.edit");

Route::put('/admin/skills/{id}/update',[SkillController::class,"update"])->name("skills.update");

