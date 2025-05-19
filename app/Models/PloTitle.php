<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PloTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_name',
        'version',
        'is_active',
    ];

    public function plos()
    {
        return $this->hasMany(PloDetail::class, 'plo_title_id');
    }
}
