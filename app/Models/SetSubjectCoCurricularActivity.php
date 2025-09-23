<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetSubjectCoCurricularActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'ms_subject_id',
        'set_academic_year_id',
        'set_schedule_id',
        'ms_teacher_id',
        'ms_class_id',
        'quota',
    ];

    public function msSubject()
    {
        return $this->belongsTo(MsSubject::class, 'ms_subject_id', 'id');
    }

    public function setAcademicYear(): BelongsTo
    {
        return $this->belongsTo(SetAcademicYear::class);
    }

    public function setSchedule(): BelongsTo
    {
        return $this->belongsTo(SetSchedule::class);
    }

    public function msTeacher(): BelongsTo  
    {
        return $this->belongsTo(MsTeacher::class, 'ms_teacher_id', 'id'); 
    }

    public function msClass(): BelongsTo
    {
        return $this->belongsTo(MsClass::class);
    }

    public function trCoCurricularActivityStudents(): HasMany
    {
        return $this->hasMany(TrCoCurricularActivityStudent::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
