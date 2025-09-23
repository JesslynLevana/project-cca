<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SetTeacherStatus;
use Illuminate\Http\Request;

class SetTeacherStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacherstatuses = SetTeacherStatus::get();
        return response()->json([
            $teacherstatuses
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
        $teacherstatus = SetTeacherStatus::where('ms_teacher_id', $id)->first();
        if ($teacherstatus) {
            return response()->json([
                $teacherstatus
            ]);
        } else {
            return response()->json([
                'status' => false,
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
