<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumTermDuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'version',
        'is_active',
    ];
}
