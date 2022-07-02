<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        '',

    ];
    public function jobPosition() {
        return $this->belongsToMany(JobPosition::class, 'job_positions_function');
    }
}
