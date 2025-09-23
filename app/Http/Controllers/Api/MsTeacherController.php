<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SetSubjectCoCurricularActivityResource;
use App\Models\MsTeacher;
use App\Models\SetAcademicYear;
use App\Models\SetSubjectCoCurricularActivity;
use App\Models\TrCoCurricularActivityStudent;
use Illuminate\Http\Request;

class MsTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    // $teacherslist = MsTeacher::get();
    // return response()->json([
    //     'status' => true,
    //     'message' => 'data found',
    //     'data' => $teacherslist,
    // ]);



    // $subjectCCA = $setSubjectCCA->map(function ($item) {
    //     return [$item->msSubject, $item->msClass];
    // });

    // dd($subjectCCA); 
    // return SetSubjectCoCurricularActivityResource::collection($subjectCCA);

    public function index()
    {
        $teacher = MsTeacher::where('teacher_id', request('teacher_id'))->firstOrFail();
        $academicYear = SetAcademicYear::where('academic_year', request('academic_year'))->firstOrFail();

        $setSubjectCCA = $teacher->setSubjectCoCurricularActivities()
            ->where('set_academic_year_id', $academicYear->id)
            ->with(['msSubject', 'msClass'])
            ->get();

        $subjectCCA = $setSubjectCCA->map(function ($item) {
            return [
                'id' => $item->id,
                'subject_id' => $item->msSubject->id,
                'subject_name' => $item->msSubject->subject_name,
                'class_id' => $item->msClass->id,
                'class' => $item->msClass->class,
                'unit' => $item->msClass->unit,
                'campus' => $item->msClass->campus,
            ];
        });

        return response()->json([
            'data' => $subjectCCA
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
        $academicYear = SetAcademicYear::where('academic_year', request('academic_year'))
            ->firstOrFail();

        $setSubjectCCA = SetSubjectCoCurricularActivity::with(['msSubject', 'msClass'])
            ->where('id', $id)
            ->where('set_academic_year_id', $academicYear->id)
            ->firstOrFail();

        $students = TrCoCurricularActivityStudent::join(
            'ms_students',
            'tr_co_curricular_activity_students.ms_student_id',
            '=',
            'ms_students.id'
        )
            ->where('tr_co_curricular_activity_students.set_subject_co_curricular_activity_id', $setSubjectCCA->id)
            ->where('tr_co_curricular_activity_students.set_academic_year_id', $academicYear->id)
            ->select('ms_students.student_id', 'ms_students.name')
            ->get();

        // dd($setSubjectCCA->id, $academicYear->id);

        return response()->json([
            'id' => $setSubjectCCA->id,
            'subject_id' => $setSubjectCCA->msSubject->id,
            'subject_name' => $setSubjectCCA->msSubject->subject_name,
            'class_id' => $setSubjectCCA->msClass->id,
            'class' => $setSubjectCCA->msClass->class,
            'unit' => $setSubjectCCA->msClass->unit,
            'campus' => $setSubjectCCA->msClass->campus,
            'students' => $students->map(fn($s) => [
                'student_id' => $s->student_id,
                'name' => $s->name,
            ]),
        ]);
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
