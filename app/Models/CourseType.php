<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'version',
        'university_id',
        'is_active',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
    
}
