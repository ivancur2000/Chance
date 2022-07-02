<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'rol',
        'name',
        'company',
        'responsabilities',
        'start_date',
        'end_date',
        'intership',
        'location_company',
    ];
    public function curriculum() {
        return $this->belongsTo(Curriculum::class);
    }

    public function references() {
        return $this->hasMany(Reference::class);
    }
}
