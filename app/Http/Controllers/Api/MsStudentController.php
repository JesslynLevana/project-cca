<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MsStudent;
use Illuminate\Http\Request;

class MsStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentlist = MsStudent::get();
        return response()->json([
            'status' => true,
            'message' => 'data found',
            'data' => $studentlist,
        ], 200);
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
    public function show(string $student_id)
    {
        $student = MsStudent::where('student_id', $student_id)->get();
        if($student){
            return response()->json([
                'status' => true,
                'message' => 'data found',
                'data' => $student,
            ], 200);
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
