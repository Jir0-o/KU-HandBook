<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingCloPlo extends Model
{
    use HasFactory;

    protected $fillable = [
        'clo_id',
        'plo_ids',
        'version',
    ];

        public function clo()
    {
        return $this->belongsTo(CourseClo::class, 'clo_id');
    }

    public function ploDetail()
    {
        return $this->belongsTo(PloDetail::class, 'plo_id');
    }
}