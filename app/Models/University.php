<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vision',
        'location',
        'web',
        'address',
        'phone',
        'version',
        'is_active',
    ];

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function disciplines()
    {
        return $this->hasManyThrough(Discipline::class, School::class);
    }

    public function missions()
    {
        return $this->hasMany(UniversityMission::class);
    }

    public function applicableSessions()
    {
        return $this->hasMany(ApplicableSession::class);
    }

    public function bnqfLevels()
    {
        return $this->hasMany(BnqfLevel::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function courseTypes()
    {
        return $this->hasMany(CourseType::class);
    }

    public function courseYears()
    {
        return $this->hasMany(CourseYear::class);
    }

    public function courseAreas()
    {
        return $this->hasMany(CourseArea::class);
    }

    public function courseStrategies()
    {
        return $this->hasMany(CourseStrategy::class);
    }

    public function learningMaterialTypes()
    {
        return $this->hasMany(LearningMaterialType::class);
    }

    public function graduateAttributes()
    {
        return $this->hasMany(GraduateAttribute::class);
    }
}
