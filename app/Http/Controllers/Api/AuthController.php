<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SetSubjectCoCurricularActivityResource;
use App\Http\Resources\UserResource;
use App\Models\MsStudent;
use App\Models\SetAcademicYear;
use App\Models\SetStudentClass;
use App\Models\SetSubjectCoCurricularActivity;
use App\Models\TrCoCurricularActivityStudent;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
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
    public function login(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required', 'regex:/^(SLAS|SLSS|ADM|T)[0-9]{4}$/i'],
            'password' => ['required', 'digits:6'],
        ]);
        
        $id = strtoupper($validated['id']);

        if (preg_match('/^(SLAS|SLSS)/', $id)) {
            $user = User::where('user_id', $id)->first();

            if ($user) {
                $student = MsStudent::where('student_id', $id)->first();
                $academicYear = SetAcademicYear::where('status', 'active')->first();

                $studentData = SetStudentClass::where('ms_student_id', $student->id)
                    ->where('set_academic_year_id', $academicYear->id)
                    ->first();
            }

            if (!$user || !$studentData || $user->level !== 2) {
                return response()->json(['message' => 'ID is not valid for student'], 403);
            }
        } elseif (preg_match('/^T/', $id)) {
            $user = User::with('msTeacher')->where('user_id', $id)->first();
            if (!$user || $user->level !== 3) {
                return response()->json(['message' => 'ID is not valid for teacher'], 403);
            }
        } elseif (preg_match('/^ADM/', $id)) {
            $user = User::with('msStudent')->where('user_id', $id)->first();
            if (!$user || $user->level !== 1) {
                return response()->json(['message' => 'ID is not valid for admin'], 403);
            }
        }

        if (!$user) {
            return response()->json(['message' => 'ID Not Found'], 404);
        }

        if ($validated['password'] !== $user->password) {
            return response()->json(['message' => 'Wrong Password'], 401);
        }

        $academic_year = SetAcademicYear::where('status', 'active')->first();

        $token = $user->createToken('api-token')->plainTextToken;
        // dd(new UserResource($user));
        return response()->json([
            'token' => $token,
            'user' => new UserResource($user),
            'academic_year' => $academic_year->academic_year,
        ], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
