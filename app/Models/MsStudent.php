<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MsStudent extends Model
{
    use HasFactory;

    protected $table = 'ms_students';

    protected $fillable = [
        'student_id',
        'name',
    ];

    public function trCoCurricularActivityStudents(): HasMany
    {
        return $this->hasMany(TrCoCurricularActivityStudent::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id', 'user_id');
    }

    public function setStudentClass():HasOne
    {
        return $this->hasOne(SetStudentClass::class, 'ms_student_id');
    }
}
