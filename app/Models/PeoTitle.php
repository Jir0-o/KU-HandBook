<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeoTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_name',
        'version',
        'is_active',
    ];

    public function peos()
    {
        return $this->hasMany(PeoDetail::class);
    }
}
