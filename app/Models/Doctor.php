<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function patients() {
        return $this->hasMany(Patient::class);
    }
    public function vitals() {
        return $this->hasMany(Vital::class);
    }
    public function prescriptions() {
        return $this->hasMany(Prescription::class);
    }
}
