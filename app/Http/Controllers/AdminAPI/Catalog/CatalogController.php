<?php

namespace App\Http\Controllers\AdminAPI\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Catalogs\CatalogCollection;
use App\Models\Catalog;
use App\Services\Api\Catalogs\CatalogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __construct(
        public CatalogService $catalogService
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->get('per_page');

        $items = $this->catalogService->index()->simplePaginate($perPage)->appends($request->query());

        return (new CatalogCollection($items))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catalog $catalog)
    {
        //
    }
}
