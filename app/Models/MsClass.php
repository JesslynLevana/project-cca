<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MsClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit', 
        'class', 
        'campus',
    ];

    public function setSubjectCoCurricularActivities(): HasMany
    {
        return $this->hasMany(SetSubjectCoCurricularActivity::class);
    }

    public function setStudentClass(): HasMany 
    {
        return $this->hasMany(SetStudentClass::class);
    }
}
