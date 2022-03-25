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
Route::post('/admin/create_sirop', [AdminController::class, 'createSirops'])->name('sirops.create');
Route::delete('/admin', [AdminController::class, 'deleteSirops'])->name('sirops.delete');
Route::get('/admin/edit_sirop/{id}', [AdminController::class, 'editSirops'])->name('sirops.edit');
Route::post('/admin/update_sirop/{id}', [AdminController::class, 'updateSirops'])->name('sirops.update');