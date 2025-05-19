<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'vision',
        'web_link',
        'version',
        'university_id',
        'is_active',
    ];

    public function disciplines()
    {
        return $this->hasMany(Discipline::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
