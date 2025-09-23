<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SetAcademicYear;
use Illuminate\Http\Request;

class SetAcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicyearslist = SetAcademicYear::get();
        return response()->json([
            $academicyearslist
        ]);
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
    public function show(string $id)
    {
        $academicyear = SetAcademicYear::find($id)->first();
        if($academicyear) {
            return response()->json([
                $academicyear
            ]);
        } else {
            return response()->json([
                'message' => 'data not found'
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
