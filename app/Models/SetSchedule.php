<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_year',
        'unit',
        'semester',
        'enrollment_start_time',
        'enrollment_end_time',
    ];

    public function setSubjectCoCurricularActivities(): HasMany
    {
        return $this->hasMany(SetSubjectCoCurricularActivity::class);
    }
}