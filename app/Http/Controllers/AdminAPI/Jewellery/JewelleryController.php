<?php

namespace App\Http\Controllers\AdminAPI\Jewellery;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Jewelleries\JewelleryCollection;
use App\Models\Jewellery;
use App\Services\Api\Jewelleries\JewelleryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JewelleryController extends Controller
{
    public function __construct(
        public JewelleryService $jewelleryService
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): mixed
    {
        $perPage = $request->get('per_page');

        $items = $this->jewelleryService->index()->simplePaginate($perPage)->appends($request->query());

        return (new JewelleryCollection($items))->response();
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
    public function show(int $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
