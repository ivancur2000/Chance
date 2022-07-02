<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'sale_amount',
        'sale_status'
    ];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function payment_method() {
        return $this->belongsTo(PaymentMethod::class);
    }
}
