<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingPeoPlo extends Model
{
    use HasFactory;

    protected $fillable = [
        'peo_id',
        'plo_id',
    ];

    public function peo()
    {
        return $this->belongsTo(PeoDetail::class);
    }

    public function plo()
    {
        return $this->belongsTo(PloDetail::class);
    }
}
