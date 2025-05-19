<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicable_session_id',
        'logo',
    ];

    public function applicableSession()
    {
        return $this->belongsTo(ApplicableSession::class);
    }
}
