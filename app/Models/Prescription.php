<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
