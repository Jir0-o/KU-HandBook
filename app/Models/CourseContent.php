<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'clo_ids',
        'version',
        'course_id',
        'is_active',
    ];

    public function courseInfo()
    {
        return $this->belongsTo(CourseInfo::class);
    }
}
