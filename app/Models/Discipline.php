<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'vision',
        'web_link',
        'version',
        'school_id',
        'is_active',
    ];

    public function degreePrograms()
    {
        return $this->hasMany(DegreeProgram::class);
    }

    public function disciplineMissions()
    {
        return $this->hasMany(DisciplineMission::class);
    }

    public function disciplineObjectives()
    {
        return $this->hasMany(DisciplineObjective::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }


    public function disciplineVisions()
    {
        return $this->hasMany(DisciplineVision::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
