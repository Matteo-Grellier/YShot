<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\AdminController;

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
Route::post('/admin/create_soft', [AdminController::class, 'createSoft'])->name('admin.create_soft');
// Route::get('/admin/delete_soft/{id}', [AdminController::class, 'deleteSoft'])->name('admin.delete_soft');
Route::get('/admin/edit_soft/{id}', [AdminController::class, 'editSoft'])->name('admin.edit_soft');
Route::put('/admin/update_soft{id}', [AdminController::class, 'updateSoft'])->name('admin.update_soft');
Route::delete('/admin', [AdminController::class, 'deleteSoft'])->name('admin.delete_soft');