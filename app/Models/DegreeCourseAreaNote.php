<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeCourseAreaNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'version',
        'degree_program_id',
        'course_area_id',
        'is_active',
    ];

    public function degreeProgram()
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    public function courseArea()
    {
        return $this->belongsTo(CourseArea::class);
    }
}
