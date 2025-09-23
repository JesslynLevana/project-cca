<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        
        if ($this->level == 3) {
            return [
                'id' => $this->msTeacher->id,
                'teacher_id' => $this->msTeacher->teacher_id,
                'name' => $this->msTeacher->name,
                'phone' => $this->msTeacher->phone,
                'campus' => $this->msTeacher->campus,
                'level' => $this->level
                // 'academic_year' => 
            ];
        }


        if ($this->level == 2) {
            // dd($this->msStudent->setStudentClass->msClass);
            return [
                'id' => $this->msStudent->id,
                'student_id' => $this->msStudent->student_id,
                'name' => $this->msStudent->name,
                'unit' => $this->msStudent->setStudentClass->msClass->unit,
                'grade' => $this->msStudent->setStudentClass->msClass->class,
                'campus' => $this->msStudent->setStudentClass->msClass->campus,
                'level' => $this->level,
                // 'academic_year' => 

                
            ];
        }

        if ($this->level === 1) {
            return [
                'Name'  => $this->name,
                'Status' => $this->status,
                'Level' => $this->level
            ];
        }


        return [
            'Name' => $this->name,
            'Level' => $this->level,
        ];
    }
}
