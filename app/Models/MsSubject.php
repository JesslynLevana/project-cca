<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MsSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_code',
        'subject_name',
    ];

    public function setSubjectCoCurricularActivities(): HasMany
    {
        return $this->hasMany(SetSubjectCoCurricularActivity::class);
    }

    public function trCoCurricularActivityStudents(): HasMany
    {
        return $this->hasMany(TrCoCurricularActivityStudent::class);
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
}