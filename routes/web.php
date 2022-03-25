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
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/', [AdminController::class, 'home']);

// CRUD routes for fruits
Route::get('/admin/create_fruits', [AdminController::class, 'createFruits'])->name('admin.create_fruits');
Route::post('/admin', [AdminController::class, 'storeFruits'])->name('admin.store_fruits');
Route::get('/admin/{id}/edit_fruits', [AdminController::class, 'editFruits'])->name('admin.edit_fruits');
Route::put('/admin/{id}/update_fruits', [AdminController::class, 'updateFruits'])->name('admin.update_fruits');
Route::delete('/admin', [AdminController::class, 'deleteFruits'])->name('admin.delete_fruits');
