<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MsTeacherDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subject' => $this->msSubject->subject_name,
            'class_id' => $this->msClass->id,
            'class' => $this->msClass->class,
            'unit' => $this->msClass->unit,
            'campus' => $this->msClass->campus,
            'students' => $this->student
        ];
    }
}
