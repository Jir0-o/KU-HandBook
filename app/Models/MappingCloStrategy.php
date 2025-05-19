<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingCloStrategy extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'version',
        'clo_id',
        'strategy_id',
        'is_active',
    ];

    public function clo()
    {
        return $this->belongsTo(CourseClo::class);
    }

    public function strategy()
    {
        return $this->belongsTo(CourseStrategy::class);
    }
}
