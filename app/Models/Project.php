<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function stuff()
    {
        return $this->belongsTo(User::class, 'stuff_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
