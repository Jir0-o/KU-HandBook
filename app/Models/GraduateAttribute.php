<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduateAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'domain_ids',
        'version',
        'degree_program_id',
        'graduate_attribute_title_id',
        'is_active',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function degreeProgram()
    {
        return $this->belongsTo(DegreeProgram::class);
    }

    public function domains()
    {
        return $this->belongsToMany(Domain::class);
    }

    public function graduateAttributeTitle()
    {
        return $this->belongsTo(GraduateAttributeTitle::class);
    }
}
