<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}