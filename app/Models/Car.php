<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

    public function contracts() {
        return $this->hasMany(Contract::class);
    }
}
