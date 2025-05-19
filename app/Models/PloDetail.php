<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PloDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_type',
        'code',
        'description',
        'version',
        'degree_program_id',
        'plo_title_id',
        'is_active',
    ];

    public function degreeProgram()
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    public function mappingsPeoPlos()
    {
        return $this->hasMany(MappingPeoPlo::class);
    }

    public function plotitle()
    {
        return $this->belongsTo(PloTitle::class, 'plo_title_id');
    }
    public function ums()
    {
        return $this->belongsToMany(UniversityMission::class, 'mapping_peo_ums', 'peo_id', 'um_id')
                    ->withTimestamps();
    }
    public function peos()
    {
        return $this->belongsToMany(PeoDetail::class, 'mapping_peo_plos', 'plo_id', 'peo_id')
                    ->withTimestamps();
    }
}
