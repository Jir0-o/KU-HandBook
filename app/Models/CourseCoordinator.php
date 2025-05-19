<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCoordinator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'version',
        'course_id',
        'is_active',
    ];

    public function courseInfo()
    {
        return $this->belongsTo(CourseInfo::class);
    }
}
