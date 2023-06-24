<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Bike;
use Illuminate\Database\Eloquent\Collection;

class BikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function allBikes(): Collection
    {
        return Bike::all();
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
    public function bikeById(string $id): Bike | JsonResponse
    {
        return Bike::find($id) ?? response()->json([
            'error' => 'bike not found'
        ], 404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
