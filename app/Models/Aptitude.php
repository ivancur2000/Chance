<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aptitude extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function persons()
    {
        return $this->belongsToMany(Aptitude::class, 'persons_aptitude');
    }

    public function jobOffers(){
        return $this->belongsToMany(JobOffer::class, 'persons_aptitude');
    }
}
