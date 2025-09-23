<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MsClassController;
use App\Http\Controllers\Api\MsStudentController;
use App\Http\Controllers\Api\MsSubjectController;
use App\Http\Controllers\Api\MsTeacherController;
use App\Http\Controllers\Api\SetAcademicYearController;
use App\Http\Controllers\Api\SetScheduleController;
use App\Http\Controllers\Api\SetSubjectCoCurricularActivityController;
use App\Http\Controllers\Api\SetTeacherStatusController;
use App\Http\Controllers\Api\TrCoCurricularActivityStudentController;
use App\Models\MsClass;
use App\Models\MsStudent;
use App\Models\TrCoCurricularActivityStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Route::get('transaction', [TrCoCurricularActivityStudentController::class, 'index']);
});
Route::post('transaction', [TrCoCurricularActivityStudentController::class, 'store']);

// Route::post('transaction', [TrCoCurricularActivityStudentController::class, 'store']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->post('transaction', [TrCoCurricularActivityStudentController::class, 'store']);

Route::get('classes', [MsClassController::class, 'index']);
Route::get('unit/{unit}', [MsClassController::class,'show']);

Route::get('subjecttaught', [MsTeacherController::class, 'index']);
Route::get('studentstaught/{subject_id}', [MsTeacherController::class, 'show']);

Route::get('studentslist', [MsStudentController::class, 'index']);
Route::get('student/{student_id}', [MsStudentController::class, 'show']);

Route::get('ccasubjectslist', [MsSubjectController::class, 'index']);
Route::get('ccasubject/{code}', [MsSubjectController::class, 'show']);

Route::get('teacherslist', [MsTeacherController::class, 'index']);
Route::get('teacher/{id}', [MsTeacherController::class, 'show']);


Route::get('academicyearslist', [SetAcademicYearController::class, 'index']);
Route::get('academicyear/{ay}', [SetAcademicYearController::class, 'show']);

Route::get('schedules', [SetScheduleController::class, 'index']);
Route::get('schedule/{unit}', [SetScheduleController::class, 'show']);

// Route::get('subjectactivities', [SetSubjectCoCurricularActivityController::class, 'index']);
Route::middleware('auth:sanctum')->get('/subjectactivities', [SetSubjectCoCurricularActivityController::class, 'index']);
Route::get('subjectactivity/{subject_id}', [SetSubjectCoCurricularActivityController::class, 'show']);

Route::get('teacherstatuses', [SetTeacherStatusController::class, 'index']);
Route::get('teacherstatus/{ms_teacher_id}', [SetTeacherStatusController::class, 'show']);

Route::get('trccastudentslist', [TrCoCurricularActivityStudentController::class, 'index']);
Route::get('trccastudent/{academic_year}', [TrCoCurricularActivityStudentController::class, 'show']);

// Route::middleware(['auth:sanctum'])->group(function () {
//     // POST Request
//     Route::post('login', [AuthController::class, 'login']);
// });