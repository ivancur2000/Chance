<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table='companies';

    protected $fillable = [
        'name',
        'description',
        'web_site',
        'facebook',
        'linkedin',
        'twitter',
        'employes',
        'user_id', 
        

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function sales(){
        return $this->hasMany(Sale::class);
    }

    public function jobOffers()
    {
        return $this->hasMany(JobOffer::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}
