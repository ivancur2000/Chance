<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'curriculum_id'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
