<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_requirement',
        'year',
        'term',
        'total_min_credit_required',
        'available_credit',
        'min_cgpa_to_graduate',
        'total_class_per_term',
        'max_academic_years_to_complete',
        'version',
        'degree_program_id',
        'is_active',
    ];

    public function degreeProgram()
    {
        return $this->belongsTo(DegreeProgram::class);
    }
    
}
