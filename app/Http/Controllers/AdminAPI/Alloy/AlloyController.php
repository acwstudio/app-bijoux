<?php

namespace App\Http\Controllers\AdminAPI\Alloy;

use App\Http\Controllers\Controller;
use App\Models\Alloy;
use Illuminate\Http\Request;

class AlloyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Alloy::all());
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
    public function show(Alloy $alloy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alloy $alloy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alloy $alloy)
    {
        //
    }
}
