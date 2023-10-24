<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'full_name',
        "date_of_birth",
        "age",
        "blood_type",
        "mobile_number",
        "address",
        "email",
        "date_of_appointment",
        "type",
        "status",
        "vitals_id",
        "prescription_id",
        "doctors_id",
    ];

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
