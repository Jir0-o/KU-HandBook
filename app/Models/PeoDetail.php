<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeoDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'domain_id',
        'version',
        'degree_program_id',
        'peo_title_id',
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

    public function mappingsPeoUms()
    {
        return $this->hasMany(MappingPeoUm::class);
    }

    public function peoTitle()
    {
        return $this->belongsTo(PeoTitle::class);
    }
    public function ums()
    {
        return $this->belongsToMany(UniversityMission::class, 'mapping_peo_ums', 'peo_id', 'um_id')
                    ->withTimestamps();
    }
    public function plos()
    {
        return $this->belongsToMany(PloDetail::class, 'mapping_peo_plos', 'peo_id', 'plo_id')
                    ->withTimestamps();
    }
}
