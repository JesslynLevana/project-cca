<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SetTeacherStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'ms_teacher_id',
        'active_period',
    ];

    public function msTeacher(): BelongsTo
    {
        return $this->belongsTo(MsTeacher::class);
    }
}