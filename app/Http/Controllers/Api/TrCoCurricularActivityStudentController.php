<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrCoCurricularActivityStudentRequest;
use App\Http\Resources\TrCoCurricularActivityStudentDetailResource;
use App\Http\Resources\TrCoCurricularActivityStudentResource;
use App\Models\MsStudent;
use App\Models\SetAcademicYear;
use App\Models\SetSchedule;
use App\Models\SetSubjectCoCurricularActivity;
use App\Models\TrCoCurricularActivityStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class TrCoCurricularActivityStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trccastudentslist = TrCoCurricularActivityStudent::get();
        return TrCoCurricularActivityStudentResource::collection($trccastudentslist);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = MsStudent::find($request->ms_student_id);

        if (!$student) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $rules = [
            'ms_student_id' => 'required|integer',
            'set_subject_co_curricular_activity_id' => 'required|integer',
            'set_academic_year_id' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'error',
                'data' => $validator->errors(),
            ]);
        }

        $msStudentId = $student->id;
        $academicYear = $request->set_academic_year_id;
        $subjectId = $request->set_subject_co_curricular_activity_id;

        // Cek apakah student sudah pernah daftar di tahun akademik ini
        $exists = DB::table('tr_co_curricular_activity_students')
            ->where('ms_student_id', $msStudentId)
            ->where('set_academic_year_id', $academicYear)
            ->first();

        if ($exists) {
            return response()->json([
                'message' => 'Student already registered in this academic year'
            ], 200);
        }

        // Ambil kuota dari tabel set_subject_co_curricular_activities
        $subject = SetSubjectCoCurricularActivity::find($subjectId);
        if (!$subject) {
            return response()->json(['message' => 'Subject not found'], 404);
        }

        // Hitung sudah ada berapa student di TR
        $currentCount = DB::table('tr_co_curricular_activity_students')
            ->where('set_subject_co_curricular_activity_id', $subjectId)
            ->count();

        if ($currentCount >= $subject->quota) {
            // 🚫 STOP → quota penuh, tidak return data subject
            return response()->json([
                'message' => 'Quota is full for this subject'
            ], 400);
        }

        // Insert data baru
        $insertId = DB::table('tr_co_curricular_activity_students')->insertGetId([
            'ms_student_id' => $msStudentId,
            'set_subject_co_curricular_activity_id' => $subjectId,
            'set_academic_year_id' => $academicYear,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ambil detail transaction + subject
        $transaction = SetSubjectCoCurricularActivity::join('ms_subjects', 'ms_subjects.id', '=', 'set_subject_co_curricular_activities.ms_subject_id')
            ->where('set_subject_co_curricular_activities.id', $subjectId)
            ->select('set_subject_co_curricular_activities.*', 'ms_subjects.subject_name')
            ->first();

        return response()->json([
            'message' => 'Transaction Recorded!',
            'data' => $transaction
        ], 201);
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trccastudent = TrCoCurricularActivityStudent::where('ms_student_id', $id)->get();
        if ($trccastudent) {
            // return response()->json([
            //     $trccastudent
            // ]);

            return new TrCoCurricularActivityStudentDetailResource($trccastudent);
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
