<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplineVision extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
        'description',
        'version',
        'discipline_id',
        'is_active'
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }
}
