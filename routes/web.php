<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\SiropsController;
use App\Http\Controllers\SoftsListController;
use App\Http\Controllers\AlcoolsNameController;
use App\Http\Controllers\AlcoolsTypesController;
use App\Http\Controllers\GlassesTypesController;
use App\Http\Controllers\CocktailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name("home");
Route::get('/cocktail', [MainController::class, 'cocktail'])->name("cocktail");
Route::get('/alcool', [MainController::class, 'alcool'])->name("alcool");
Route::get('/soft', [MainController::class, 'soft'])->name("soft");

// ADMIN
Route::get('/admin', [AdminController::class, 'index'])->name("admin.home");
Route::get('/admin/manage_ingredients', [AdminController::class, 'manageIngredients'])->name("admin.manage_ingredients");
Route::get('/admin/manage_cocktails', [AdminController::class, 'manageCocktails'])->name("admin.manage_cocktails");

//routes for login
Route::get('/login', [LoginController::class, 'index'])->name("admin.login");
Route::post('/checklogin', [LoginController::class, 'checklogin'])->name("admin.login.checklogin");
// Route::get('/successlogin', [LoginController::class, 'successlogin'])->name("admin.login.successlogin");
Route::get('/logout', [LoginController::class, 'logout'])->name("admin.login.logout");

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

//CRUD routes for sirops
Route::post('/admin/create_sirop', [SiropsController::class, 'createSirops'])->name('sirops.create');
Route::delete('/admin/delete_sirops', [SiropsController::class, 'deleteSirops'])->name('sirops.delete');
Route::get('/admin/edit_sirop/{id}', [SiropsController::class, 'editSirops'])->name('sirops.edit');
Route::post('/admin/update_sirop/{id}', [SiropsController::class, 'updateSirops'])->name('sirops.update');

// CRUD routes for fruits
Route::get('/admin/create_fruits', [FruitsController::class, 'createFruits'])->name('admin.create_fruits');
Route::post('/admin', [FruitsController::class, 'storeFruits'])->name('admin.store_fruits');
Route::get('/admin/{id}/edit_fruits', [FruitsController::class, 'editFruits'])->name('admin.edit_fruits');
Route::put('/admin/{id}/update_fruits', [FruitsController::class, 'updateFruits'])->name('admin.update_fruits');
Route::delete('/admin/delete_fruits', [FruitsController::class, 'deleteFruits'])->name('admin.delete_fruits');

// CRUD routes for alcools
route::post('/admin/create_alcools', [AlcoolsNameController::class, 'create'])->name('admin.create_alcool_name');
route::get('/admin/{id}/edit_alcools', [AlcoolsNameController::class, 'edit'])->name('admin.edit_alcool_name');
route::put('/admin/{id}/update_alcools', [AlcoolsNameController::class, 'update'])->name('admin.update_alcool_name');
route::delete('/admin/delete_alcools', [AlcoolsNameController::class, 'destroy'])->name('admin.delete_alcool_name');

// CRUD routes for cocktails
route::post('/admin/create_cocktail', [CocktailsController::class, 'create'])->name('admin.create_cocktail');
route::put('/admin/{id}/update_cocktail', [CocktailsController::class, 'update'])->name('admin.update_cocktail');
route::delete('/admin/delete_cocktail', [CocktailsController::class, 'delete'])->name('admin.delete_cocktail');

//CRUD routes for cocktails elements (alcools, fruits etc...)
route::post('/admin/create_cocktail_alcool', [CocktailsController::class, 'create_alcool_link'])->name('admin.create_cocktail_alcool');
route::delete('/admin/delete_cocktail_alcool', [CocktailsController::class, 'delete_alcool_link'])->name('admin.delete_cocktail_alcool');

route::post('/admin/create_cocktail_soft', [CocktailsController::class, 'create_soft_link'])->name('admin.create_cocktail_soft');
route::delete('/admin/delete_cocktail_soft', [CocktailsController::class, 'delete_soft_link'])->name('admin.delete_cocktail_soft');

route::post('/admin/create_cocktail_fruit', [CocktailsController::class, 'create_fruit_link'])->name('admin.create_cocktail_fruit');
route::delete('/admin/delete_cocktail_fruit', [CocktailsController::class, 'delete_fruit_link'])->name('admin.delete_cocktail_fruit');

route::post('/admin/create_cocktail_sirop', [CocktailsController::class, 'create_sirop_link'])->name('admin.create_cocktail_sirop');
route::delete('/admin/delete_cocktail_sirop', [CocktailsController::class, 'delete_sirop_link'])->name('admin.delete_cocktail_sirop');