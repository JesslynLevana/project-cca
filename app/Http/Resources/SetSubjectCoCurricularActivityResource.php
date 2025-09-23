<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SetSubjectCoCurricularActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        $level = auth()->user()->level;
        // $level = 2;
        if ($level == 2) {

            return [
                'id' =>$this->id,
                'subject_id' => $this->ms_subject_id,
                'Subject' => $this->msSubject->subject_name,
                'set_academic_year_id' => $this->set_academic_year_id,
            ];
        }


        // if ($level == 2) {
        //     return [
        //         'subject_id' => $this->id,
        //         'Subject' => $this->msSubject->subject_name,
        //         'set_academic_year_id' => $this->set_academic_year_id,
        //         'alreadyEnrolled' => $this->whenLoaded('alreadyEnrolled', function () {
        //             return $this->enrolled->map(function ($enroll) {
        //                 return [
        //                     'id' => $enroll->id,
        //                     'student_id' => $enroll->student_id,
        //                     'student_name' => $enroll->student->name,
        //                 ];
        //             });
        //         }),
        //         'enrolled_class' => $this->whenLoaded('enrolledClass', function () {
        //             return [
        //                 'id' => $this->enrolledClass->id,
        //                 'enrolledClass' => optional($this->enrolledClass)->subject_name,
        //             ];
        //         }),
        //     ];
        // }


        else if ($level == 3) {
            return [
                'id' => $this->msSubject->id,
                'Subject' => $this->msSubject->subject_name,
                'class' => $this->msClass->class,
                'set_academic_year_id' => $this->set_academic_year_id,
            ];
        }

        // fallback kalau level lain
        return [
            'id' => $this->id,
            'Subject' => $this->msSubject->subject_name,
            'set_academic_year_id' => $this->set_academic_year_id,
        ];
    }
}
