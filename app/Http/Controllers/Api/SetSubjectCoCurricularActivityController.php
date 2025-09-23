<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SetSubjectCoCurricularActivityDetailResource;
use App\Http\Resources\SetSubjectCoCurricularActivityResource;
use App\Http\Resources\TrCoCurricularActivityStudentResource;
use App\Models\MsClass;
use App\Models\MsStudent;
use App\Models\SetAcademicYear;
use App\Models\SetSchedule;
use App\Models\SetStudentClass;
use App\Models\SetSubjectCoCurricularActivity;
use App\Models\TrCoCurricularActivityStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetSubjectCoCurricularActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'student_id' => request('student_id'),
            'academic_year' => request('academic_year'),
        ];

        $student = MsStudent::where('student_id', $data['student_id'])->first();
        $academicYear = SetAcademicYear::where('academic_year', $data['academic_year'])->first();

        $alreadyEnrolled = TrCoCurricularActivityStudent::where('ms_student_id', $student->id)
            ->where('set_academic_year_id', $academicYear->id)
            ->first();

        if (!!$alreadyEnrolled) {
            return response()->json([
                'alreadyEnrolled' => true,
                'subject_name' => new TrCoCurricularActivityStudentResource($alreadyEnrolled)
            ]);
        }

        $matchClassId = SetStudentClass::join('ms_classes', function ($join) {
            $join->on('ms_classes.id', '=', 'set_student_classes.ms_class_id');
        })
            ->where('set_student_classes.ms_student_id', '=', $student->id)
            ->where('set_student_classes.set_academic_year_id', '=', $academicYear->id)
            ->first();

        $subjectactivities = SetSubjectCoCurricularActivity::with(['msSubject', 'msClass', 'setSchedule'])
            ->where('set_academic_year_id', $academicYear['id'])
            ->where('ms_class_id', $matchClassId['id'])
            ->get();

        $dateNow = Carbon::now();
        $filtered = $subjectactivities->filter(function ($subject) use ($dateNow) {
            $schedule = $subject->setSchedule;
            if (!$schedule) return false;

            $start = Carbon::parse($schedule->enrollment_start_time);
            $end = Carbon::parse($schedule->enrollment_end_time);
            if (!$dateNow->between($start, $end)) {
                return false;
            }

            $currentCount = TrCoCurricularActivityStudent::where('set_subject_co_curricular_activity_id', $subject->id)->count();
            if ($currentCount >= $subject->quota) {
                return false; 
            }

            return true;
        })->values();

        if ($filtered->isNotEmpty()) {
            return SetSubjectCoCurricularActivityResource::collection($filtered);
        }

        return response()->json([
            'message' => 'No CCA is available'
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
        $subjectactivity = SetSubjectCoCurricularActivity::with([
            'msSubject',
            'setAcademicYear',
            'setSchedule',
            'msTeacher',
            'msClass'
        ])->find($id);

        if (!$subjectactivity) {
            return response()->json([
                'status' => false,
                'message' => 'data not found'
            ]);
        }

        return new SetSubjectCoCurricularActivityDetailResource($subjectactivity);
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
