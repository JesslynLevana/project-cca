<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MsClassResource;
use App\Models\MsClass;
use Illuminate\Http\Request;

class MsClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = MsClass::get();
        // return response()->json([
        //     'status' => true,
        //     'message' => 'data found',
        //     'data' => $classes,
        // ], 200);

        return MsClassResource::collection($classes);
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
    public function show(string $unit)
    {
        $class = MsClass::where('unit', $unit)->first();
        if ($class) {
            // return response()->json([
            //     'status' => true,
            //     'message' => 'data found',
            //     'data' => $class,
            // ]);

            return new MsClassResource($class);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'data not found',
            ]);
        }
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
