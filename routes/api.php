<?php

use App\Http\Controllers\AdminAPI\Catalog\CatalogController;
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

// catalog parent


// catalog children
