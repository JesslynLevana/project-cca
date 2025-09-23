<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrCoCurricularActivityStudentDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->id,
            'Student Name' => $this->msStudent->name,
            'Subject' => $this->setSubjectCoCurricularActivity->msSubject->subject_name,
            'Academic Year' => $this->setAcademicYear->academic_year,
        ];
    }
}
