<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplineObjectiveTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'version',
        'is_active',
    ];

    public function disciplineObjectives()
    {
        return $this->hasMany(DisciplineObjective::class);
    }
}
