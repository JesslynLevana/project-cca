<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetStudentClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'ms_student_id',
        'ms_class_id',
        'set_academic_year_id'
    ];

    public function msStudent(): BelongsTo
    {
        return $this->belongsTo(MsStudent::class);
    }

    public function msClass(): BelongsTo
    {
        return $this->belongsTo(MsClass::class);
    }

    public function setAcademicYear(): BelongsTo
    {
        return $this->belongsTo(SetAcademicYear::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
