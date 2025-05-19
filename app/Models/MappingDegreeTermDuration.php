<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingDegreeTermDuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit',
        'value',
        'version',
        'degree_program_id',
        'term_duration_id',
        'is_active',
    ];

    public function degreeProgram()
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    public function termDuration()
    {
        return $this->belongsTo(CurriculumTermDuration::class, 'term_duration_id');
    }
}
