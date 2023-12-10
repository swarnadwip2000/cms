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

    public function canadianWorkExperience()
    {
        return $this->hasMany(CanadianWorkExperience::class);
    }

    public function educationHistory()
    {
        return $this->hasMany(EducationHistory::class);
    }

    public function foreignWorkExperience()
    {
        return $this->hasMany(ForeignWorkExperience::class);
    }

    public function travelHistory()
    {
        return $this->hasMany(TravelHistory::class);
    }

    public function visaRefusals()
    {
        return $this->hasMany(VisaRefusal::class);
    }
}
