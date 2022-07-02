<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function jobOffer() {
        return $this->hasMany(JobOffer::class);
    }
    public function curriculums() {
        return $this->hasMany(Curriculum::class);
    }
    public function jobPositions() {
        return $this->hasMany(JobPosition::class);
    }
    
}
