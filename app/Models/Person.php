<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table='persons';
    protected $fillable=
    [
        'life_motto',
        'description',
        'extension',
        'phone',
        'facebook',
        'linkedin',
        'twitter',
        'tiktok',
        'web_site',
        'zone',
        'street',
        'number',
        'date_birth',
        'civil_status',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function aptitudes()
    {
        return $this->belongsToMany(Aptitude::class, 'persons_aptitude');
    }
    public function aplications(){
        return $this->hasMany(Application::class);
    }
    public function chats() {
        return $this->hasMany(Chat::class);
    }
    public function curriculums()
    {
        return $this->hasMany(Curriculum::class);
    }
}
