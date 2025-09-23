<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MsTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'campus',
        'name',
        'phone',
        'address',
    ];  
    public function setSubjectCoCurricularActivities(): HasMany
    {
        return $this->hasMany(SetSubjectCoCurricularActivity::class, 'ms_teacher_id', 'id');
    }

    public function setTeacherStatuses(): HasMany
    {
        return $this->hasMany(SetTeacherStatus::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
        // return $this->belongsTo(User::class, 'teacher_id', 'user_id');
    }
}
