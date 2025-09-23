<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrCoCurricularActivityStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ms_student_id',
        'set_subject_co_curricular_activity_id',
        'set_academic_year_id',
    ];

    public function msStudent(): BelongsTo
    {
        return $this->belongsTo(MsStudent::class);
    }
    
    public function setSubjectCoCurricularActivity(): BelongsTo
    {
        return $this->belongsTo(SetSubjectCoCurricularActivity::class);
    }
    
    public function setAcademicYear(): BelongsTo
    {
        return $this->belongsTo(SetAcademicYear::class);
    }
}

