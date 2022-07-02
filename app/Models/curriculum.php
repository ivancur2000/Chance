<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'salary_aspiration',
        'modality',
        'type_job',
        'user_id',
        'profession_id'
    ];

    protected $table = 'curriculums';

    public function person() {
        return $this->belongsTo(Person::class);
    }

    public function profession() {
        return $this->belongsTo(Profession::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }

    public function workExperiences() {
        return $this->hasMany(WorkExperience::class);
    }

    public function academiTranings()
    {
        return $this->hasMany(AcademicTraining::class);
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class, 'curriculums_languages');
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
