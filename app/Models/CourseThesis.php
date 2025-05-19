<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseThesis extends Model
{
    use HasFactory;

    protected $fillable = [
        'linked_resource',
        'version',
        'course_id',
        'is_active',
    ];

    public function course()
    {
        return $this->belongsTo(CourseInfo::class, 'course_id');
    }
}
