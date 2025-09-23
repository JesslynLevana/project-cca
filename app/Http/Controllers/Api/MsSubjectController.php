<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MsSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MsSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ccasubjectslist = MsSubject::get();
        return response()->json([
            'status' => true,
            'message' => 'data found',
            'data' => $ccasubjectslist,
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
    public function show(string $code)
    {
        $ccasubject = MsSubject::where('subject_code', $code)->get();
        if ($ccasubject) {
            return response()->json([
                'status' => true,
                'message' => 'data found',
                'data' => $ccasubject,
            ]);
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
