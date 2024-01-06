<?php

use App\Http\Controllers\AdminAPI\Catalog\CatalogController;
use App\Http\Controllers\AdminAPI\Gemstone\GemstoneController;
use App\Http\Controllers\AdminAPI\Material\MaterialController;
use App\Http\Controllers\AdminAPI\PreciousMetal\PreciousMetalController;
use App\Http\Controllers\AdminAPI\Alloy\AlloyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

/*****************  CATALOG ROUTES **************/
// CRUD catalogs
Route::get('/catalogs', [CatalogController::class, 'index'])->name('catalogs.index');
Route::get('/catalogs/{id}', [CatalogController::class, 'show'])->name('catalogs.show');
Route::post('/catalogs', [CatalogController::class, 'store'])->name('catalogs.store');
Route::patch('/catalogs/{id}', [CatalogController::class, 'update'])->name('catalogs.update');
Route::delete('/catalogs/{id}', [CatalogController::class, 'destroy'])->name('catalogs.destroy');
// many-to-one catalog parent

// one-to-many catalog children

// one-to-many catalog jewelleries

/*****************  PRECIOUS METAL ROUTES **************/
// CRUD precious-metals
Route::get('/precious-metals', [PreciousMetalController::class, 'index'])->name('precious-metals.index');
Route::get('/precious-metals/{id}', [PreciousMetalController::class, 'show'])->name('precious-metals.show');
Route::post('/precious-metals', [PreciousMetalController::class, 'store'])->name('precious-metals.store');
Route::patch('/precious-metals/{id}', [PreciousMetalController::class, 'update'])->name('precious-metals.update');
Route::delete('/precious-metals/{id}', [PreciousMetalController::class, 'destroy'])->name('precious-metals.destroy');
// many-to-many precious-metals skus

/*****************  ALLOYS ROUTES **************/
// CRUD alloys
Route::get('/alloys', [AlloyController::class, 'index'])->name('alloys.index');
Route::get('/alloys/{id}', [AlloyController::class, 'show'])->name('alloys.show');
Route::post('/alloys', [AlloyController::class, 'store'])->name('alloys.store');
Route::patch('/alloys/{id}', [AlloyController::class, 'update'])->name('alloys.update');
Route::delete('/alloys/{id}', [AlloyController::class, 'destroy'])->name('alloys.destroy');
// many-to-many alloys skus

/*****************  MATERIALS ROUTES **************/
// CRUD materials
Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/materials/{id}', [MaterialController::class, 'show'])->name('materials.show');
Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');
Route::patch('/materials/{id}', [MaterialController::class, 'update'])->name('materials.update');
Route::delete('/materials/{id}', [MaterialController::class, 'destroy'])->name('materials.destroy');
// many-to-many materials skus

/*****************  GEMSTONES ROUTES **************/
// CRUD gemstones
Route::get('/gemstones', [GemstoneController::class, 'index'])->name('gemstones.index');
Route::get('/gemstones/{id}', [GemstoneController::class, 'show'])->name('gemstones.show');
Route::post('/gemstones', [GemstoneController::class, 'store'])->name('gemstones.store');
Route::patch('/gemstones/{id}', [GemstoneController::class, 'update'])->name('gemstones.update');
Route::delete('/gemstones/{id}', [GemstoneController::class, 'destroy'])->name('gemstones.destroy');
// many-to-many materials skus
