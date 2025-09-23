<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrCoCurricularActivityStudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'subject_id' => $this->setSubjectCoCurricularActivity->ms_subject_id,
            'Subject' => $this->setSubjectCoCurricularActivity->msSubject->subject_name,
            'set_academic_year_id' => $this->set_academic_year_id,
        ];
    }
}
