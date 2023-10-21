<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    
    public function vitals() {
        return $this->hasMany(Vital::class);
    }
    public function prescriptions() {
        return $this->hasMany(Prescription::class);
    }
    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
