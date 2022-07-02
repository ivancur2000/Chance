<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession_id',
    ];
    public function profession() {
        return $this->belongsTo(Profession::class);
    }
    public function functions() {
        return $this->belongsToMany(FunctionJob::class, 'job_positions_function');
    }

}
