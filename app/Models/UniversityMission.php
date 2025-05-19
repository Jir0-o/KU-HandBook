<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityMission extends Model
{
    use HasFactory;

    protected $fillable = [
        'um_number',
        'description',
        'version',
        'university_id',
        'is_active',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function mappingPeoUms()
    {
        return $this->hasMany(MappingPeoUm::class);
    }
    public function peos()
    {
        return $this->belongsToMany(PeoDetail::class, 'mapping_peo_ums', 'um_id', 'peo_id')
                    ->withTimestamps();
    }
}
