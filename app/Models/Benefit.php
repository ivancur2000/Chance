<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    protected $table= 'benefits';
    protected $fillable = [
        'vacations',
        'vacation_bonus',
        'social_insurance',
        'life_insurance',
        'major_expenses_insurance',
        'bonus',
        'food_vouchers',
        'transportation',
        'saving_funds',
        'loans',
        'dining_room',
        'commissions',
    ];
    public function jobOffers() {
        return $this->hasMany(JobOffer::class);
    }
}
