<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingPeoUm extends Model
{
    use HasFactory;

    protected $fillable = [
        'peo_id',
        'um_id',
    ];

    public function peo()
    {
        return $this->belongsTo(PeoDetail::class);
    }

    public function um()
    {
        return $this->belongsTo(UniversityMission::class);
    }
    
}
