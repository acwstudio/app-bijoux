<?php

use App\Http\Controllers\AdminAPI\Catalog\CatalogChildrenRelatedController;
use App\Http\Controllers\AdminAPI\Catalog\CatalogChildrenRelationshipsController;
use App\Http\Controllers\AdminAPI\Catalog\CatalogController;
use App\Http\Controllers\AdminAPI\Catalog\CatalogsParentRelatedController;
use App\Http\Controllers\AdminAPI\Catalog\CatalogsParentRelationshipsController;
use App\Http\Controllers\AdminAPI\Colour\ColourController;
use App\Http\Controllers\AdminAPI\Gemstone\GemstoneController;
use App\Http\Controllers\AdminAPI\Jewellery\JewelleriesCatalogRelatedController;
use App\Http\Controllers\AdminAPI\Jewellery\JewelleriesCatalogRelationshipsController;
use App\Http\Controllers\AdminAPI\Jewellery\JewelleriesPreciousMetalsRelatedController;
use App\Http\Controllers\AdminAPI\Jewellery\JewelleriesPreciousMetalsRelationshipsController;
use App\Http\Controllers\AdminAPI\Jewellery\JewelleryController;
use App\Http\Controllers\AdminAPI\Material\MaterialController;
use App\Http\Controllers\AdminAPI\PreciousMetal\PreciousMetalController;
use App\Http\Controllers\AdminAPI\Alloy\AlloyController;
use App\Http\Controllers\AdminAPI\MetalPurity\MetalPurityController;
use App\Http\Controllers\AdminAPI\Weave\WeaveController;
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
// many-to-one catalogs parent
Route::get('catalogs/{id}/relationships/parent',[CatalogsParentRelationshipsController::class,'index'])
    ->name('catalogs.relationships.parent');
Route::patch('catalogs/{id}/relationships/parent',[CatalogsParentRelationshipsController::class,'update'])
    ->name('catalogs.relationships.parent');
Route::get('catalogs/{id}/parent',[CatalogsParentRelatedController::class, 'index'])
    ->name('catalogs.parent');
// one-to-many catalog children
Route::get('catalogs/{id}/relationships/children',[CatalogChildrenRelationshipsController::class,'index'])
    ->name('catalog.relationships.children');
Route::patch('catalogs/{id}/relationships/children',[CatalogChildrenRelationshipsController::class,'update'])
    ->name('catalog.relationships.children');
Route::get('catalogs/{id}/children',[CatalogChildrenRelatedController::class, 'index'])
    ->name('catalog.children');
// one-to-many catalog jewelleries
Route::get('catalogs/{id}/relationships/jewelleries',[CatalogChildrenRelationshipsController::class,'index'])
    ->name('catalog.relationships.jewelleries');
Route::patch('catalogs/{id}/relationships/jewelleries',[CatalogChildrenRelationshipsController::class,'update'])
    ->name('catalog.relationships.jewelleries');
Route::get('catalogs/{id}/jewelleries',[CatalogChildrenRelatedController::class, 'index'])
    ->name('catalog.jewelleries');

/*****************  PRECIOUS METAL ROUTES **************/
// CRUD precious-metals
Route::get('/precious-metals', [PreciousMetalController::class, 'index'])->name('precious-metals.index');
Route::get('/precious-metals/{id}', [PreciousMetalController::class, 'show'])->name('precious-metals.show');
Route::post('/precious-metals', [PreciousMetalController::class, 'store'])->name('precious-metals.store');
Route::patch('/precious-metals/{id}', [PreciousMetalController::class, 'update'])->name('precious-metals.update');
Route::delete('/precious-metals/{id}', [PreciousMetalController::class, 'destroy'])->name('precious-metals.destroy');
// many-to-many precious-metals skus

// one-to-many precious-metal metal-purities

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
// many-to-many gemstones skus

/*****************  METAL PURITIES ROUTES **************/
// CRUD metal-purities
Route::get('/metal-purities', [MetalPurityController::class, 'index'])->name('metal-purities.index');
Route::get('/metal-purities/{id}', [MetalPurityController::class, 'show'])->name('metal-purities.show');
Route::post('/metal-purities', [MetalPurityController::class, 'store'])->name('metal-purities.store');
Route::patch('/metal-purities/{id}', [MetalPurityController::class, 'update'])->name('metal-purities.update');
Route::delete('/metal-purities/{id}', [MetalPurityController::class, 'destroy'])->name('metal-purities.destroy');
// many-to-one metal-purities precious-metal

/*****************  Weaves ROUTES **************/
// CRUD gemstones
Route::get('/weaves', [WeaveController::class, 'index'])->name('weaves.index');
Route::get('/weaves/{id}', [WeaveController::class, 'show'])->name('weaves.show');
Route::post('/weaves', [WeaveController::class, 'store'])->name('weaves.store');
Route::patch('/weaves/{id}', [WeaveController::class, 'update'])->name('weaves.update');
Route::delete('/weaves/{id}', [WeaveController::class, 'destroy'])->name('weaves.destroy');
// many-to-many weaves skus

/*****************  JEWELLERIES ROUTES **************/
// CRUD jewelleries
Route::get('/jewelleries', [JewelleryController::class, 'index'])->name('jewelleries.index');
Route::get('/jewelleries/{id}', [JewelleryController::class, 'show'])->name('jewelleries.show');
Route::post('/jewelleries', [JewelleryController::class, 'store'])->name('jewelleries.store');
Route::patch('/jewelleries/{id}', [JewelleryController::class, 'update'])->name('jewelleries.update');
Route::delete('/jewelleries/{id}', [JewelleryController::class, 'destroy'])->name('jewelleries.destroy');
// many-to-many jewellery precious-metals
Route::get('jewelleries/{id}/relationships/precious-metals', [JewelleriesPreciousMetalsRelationshipsController::class, 'index'])
    ->name('jewelleries.relationships.precious-metals');
Route::patch('jewelleries/{id}/relationships/precious-metals', [JewelleriesPreciousMetalsRelationshipsController::class, 'update'])
    ->name('jewelleries.relationships.precious-metals');
Route::get('jewelleries/{id}/precious-metals', [JewelleriesPreciousMetalsRelatedController::class, 'index'])
    ->name('jewelleries.precious-metals');
// many-to-one jewelleries catalog
Route::get('jewelleries/{id}/relationships/catalog', [JewelleriesCatalogRelationshipsController::class, 'index'])
    ->name('jewelleries.relationships.catalog');
Route::patch('jewelleries/{id}/relationships/catalog', [JewelleriesCatalogRelationshipsController::class, 'update'])
    ->name('jewelleries.relationships.catalog');
Route::get('jewelleries/{id}/catalog', [JewelleriesCatalogRelatedController::class, 'index'])
    ->name('jewelleries.catalog');

/*****************  COLOURS ROUTES **************/
// CRUD colours
Route::get('/colours', [ColourController::class, 'index'])->name('colours.index');
Route::get('/colours/{id}', [ColourController::class, 'show'])->name('colours.show');
Route::post('/colours', [ColourController::class, 'store'])->name('colours.store');
Route::patch('/colours/{id}', [ColourController::class, 'update'])->name('colours.update');
Route::delete('/colours/{id}', [ColourController::class, 'destroy'])->name('colours.destroy');
