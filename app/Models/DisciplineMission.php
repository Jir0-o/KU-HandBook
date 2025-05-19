<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplineMission extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'version',
        'discipline_id',
        'discipline_mission_title_id',
        'is_active',
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function disciplineMissionTitle()
    {
        return $this->belongsTo(DisciplineMissionTitle::class);
    }

}
