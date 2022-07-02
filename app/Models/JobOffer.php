<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;
    protected $table= 'job_offers';
    protected $fillable = [
        'title',
        'type_job',
        'modality',
        'salary',
        'description',
        'company_id	',
        'requirement_id',
        'benefit_id',
        'profession_id',
    ];
    public function aptitudes() {
        return $this->belongsToMany(Aptitude::class, 'persons_aptitude');
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function requirement() {
        return $this->hasMany(Requirement::class);
    }
    public function profession() {
        return $this->belongsTo(Profession::class);
    }
    public function applications() {
        return $this->hasMany(Application::class);
    }
    public function benefit(){
        return $this->belongsTo(Benefit::class);
    }
}
