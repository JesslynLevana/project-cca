<?php

namespace App\Http\Resources;

use App\Models\SetAcademicYear;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SetSubjectCoCurricularActivityDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this);

        return [
            'id'=> $this->id,
            'subject_id' => $this->ms_subject_id,
            'Subject' => $this->msSubject->subject_name,
            'set_academic_year_id' => $this->setAcademicYear->id,
            'Academic Year' => $this->setAcademicYear->academic_year,
            'Enrollment Start Time' => $this->setSchedule->enrollment_start_time,
            'Enrollment End Time' => $this->setSchedule->enrollment_end_time,
            'Teacher' => $this->msTeacher->name,
            'Grade' => $this->msClass->class,
            // 'Kuota' => $this->kuota
        ];
    }
}
