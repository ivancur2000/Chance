<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'rol',
        'extension',
        'phone',

    ];

    public function workExperience() {
        return $this->belongsTo(WorkExperience::class);
    }
}
