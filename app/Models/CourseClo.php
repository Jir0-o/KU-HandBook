<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClo extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'version',
        'course_id',
        'is_active',
    ];

    // public function courseInfo()
    // {
    //     return $this->belongsTo(CourseInfo::class);
    // }
    //     public function mappingCloPlos()
    // {
    //     return $this->hasMany(MappingCloPlo::class, 'clo_id', 'id');
    // }
    public function courseInfos()
    {
        return $this->belongsToMany(CourseInfo::class, 'course_info_course_clo', 'course_clo_id', 'course_info_id');
    }

    public function mappingCloPlos()
    {
        return $this->hasMany(MappingCloPlo::class, 'clo_id');
    }
    public function mapping_clo_plos()
    {
        return $this->hasMany(MappingCloPlo::class, 'clo_id', 'id');
    }
}
