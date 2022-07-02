<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution',
        'academic_level',
        'start_date',
        'end_date',
        'tesis',
    ];
    protected $table = 'academic_training';

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
