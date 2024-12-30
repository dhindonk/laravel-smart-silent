<?php

namespace App\Http\Controllers;

use App\Models\NoiseData;
use App\Http\Requests\StoreNoiseDataRequest;
use App\Http\Requests\UpdateNoiseDataRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Request;

class NoiseDataController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NoiseData::get();
        return response()->json([
            'message' => 'Noise data successfully',
            'data' => $data
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoiseDataRequest $request)
    {
        $data = $request->validated();

        $data = NoiseData::create($data);

        return response()->json([
            'message' => 'Noise data created successfully',
            'data' => $data
        ], 201);
    }

    
}
