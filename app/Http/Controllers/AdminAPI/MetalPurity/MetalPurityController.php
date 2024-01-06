<?php

namespace App\Http\Controllers\AdminAPI\MetalPurity;

use App\Http\Controllers\Controller;
use App\Models\MetalPurity;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class MetalPurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return MetalPurity::find($id)->preciousMetal;
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
