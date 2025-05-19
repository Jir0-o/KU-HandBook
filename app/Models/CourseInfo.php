<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
        'credit',
        'total_hours',
        'pre_requisite',
        'version',
        'degree_program_id',
        'year_id',
        'term_id',
        'course_area_id',
        'course_type_id',
        'is_active',
    ];

    public function degreeProgram()
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    public function courseYear()
    {
        return $this->belongsTo(CourseYear::class, 'year_id');
    }

    public function courseTerm()
    {
        return $this->belongsTo(CourseTerm::class, 'term_id');
    }

    public function courseArea()
    {
        return $this->belongsTo(CourseArea::class);
    }

    public function courseType()
    {
        return $this->belongsTo(CourseType::class);
    }

    public function courseCoordinator()
    {
        return $this->hasMany(CourseCoordinator::class, 'course_id');
    }

    //     public function courseClos()
    // {
    //     return $this->hasMany(CourseClo::class, 'course_id', 'id');
    // }
    public function courseClos()
    {
        return $this->belongsToMany(CourseClo::class, 'course_info_course_clo', 'course_info_id', 'course_clo_id');
    }

    public function courseContent()
    {
        return $this->hasMany(CourseContent::class, 'course_id');
    }

    public function courseLearningMaterials()
    {
        return $this->hasMany(CourseLearningMaterial::class, 'course_id');
    }

    public function courseThesis()
    {
        return $this->hasMany(CourseThesis::class, 'course_id');
    }
}