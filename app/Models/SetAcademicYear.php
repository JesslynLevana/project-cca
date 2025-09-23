<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetAcademicYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_year',
        'status'
    ];

    public function setSubjectCoCurricularActivities(): HasMany
    {
        return $this->hasMany(SetSubjectCoCurricularActivity::class);
    }

    public function trCoCurricularActivityStudents(): HasMany
    {
        return $this->hasMany(TrCoCurricularActivityStudent::class);
    }

    public function setStudentClasses(): HasMany
    {
        return $this->hasMany(SetStudentClass::class);
    }
}
