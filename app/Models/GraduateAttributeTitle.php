<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduateAttributeTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_name',
        'version',
        'is_active',
    ];

    public function graduateAttributes()
    {
        return $this->hasMany(GraduateAttribute::class);
    }
}
