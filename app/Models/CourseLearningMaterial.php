<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLearningMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'version',
        'course_id',
        'learning_material_type_id',
        'is_active',
    ];

    public function course()
    {
        return $this->belongsTo(CourseInfo::class);
    }

    public function learningMaterialType()
    {
        return $this->belongsTo(LearningMaterialType::class);
    }
}
