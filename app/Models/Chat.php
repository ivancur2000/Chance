<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_status',
    ];

    public function person() {
        return $this->belongsTo(Person::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }
}
