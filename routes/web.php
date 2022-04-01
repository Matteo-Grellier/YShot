<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SoftsListController;
use App\Http\Controllers\AlcoolsTypesController;
use App\Http\Controllers\GlassesTypesController;

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
Route::get('/admin', [AdminController::class, 'index'])->name("admin.home");
Route::get('/', [AdminController::class, 'home'])->name("home");

//CRUD routes for soft
Route::post('/admin/create_soft', [SoftsListController::class, 'create'])->name('admin.create_soft');
Route::get('/admin/edit_soft/{id}', [SoftsListController::class, 'edit'])->name('admin.edit_soft');
Route::put('/admin/update_soft{id}', [SoftsListController::class, 'update'])->name('admin.update_soft');
Route::delete('/admin/delete_soft', [SoftsListController::class, 'delete'])->name('admin.delete_soft');

//CRUD routes for alcools types
Route::post('/admin/create_alcools_types', [AlcoolsTypesController::class, 'create'])->name('admin.create_alcools_types');
Route::get('/admin/edit_alcools_types/{id}', [AlcoolsTypesController::class, 'edit'])->name('admin.edit_alcools_types');
Route::put('/admin/update_alcools_types/{id}', [AlcoolsTypesController::class, 'update'])->name('admin.update_alcools_types');
Route::delete('/admin/delete_alcools_types', [AlcoolsTypesController::class, 'delete'])->name('admin.delete_alcools_types');

//CRUD routes for glasses types
Route::post('/admin/create_glasses_types', [GlassesTypesController::class, 'create'])->name('admin.create_glasses_types');
Route::get('/admin/edit_glasses_types/{id}', [GlassesTypesController::class, 'edit'])->name('admin.edit_glasses_types');
Route::put('/admin/update_glasses_types/{id}', [GlassesTypesController::class, 'update'])->name('admin.update_glasses_types');
Route::delete('/admin/delete_glasses_types', [GlassesTypesController::class, 'delete'])->name('admin.delete_glasses_types');