<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "fullName" => $this->getFullName(),
            // "firstName" => $this->first_name,
            // "middleName" => $this->middle_name,
            // "lastName" => $this->last_name,
            "dateOfBirth" => $this->date_of_birth,
            "age" => $this->age,
            "bloodType" => $this->blood_type,
            "mobileNumber" => $this->mobile_number,
            "address" => $this->address,
            "email" => $this->email,
            "dateOfAppointment" => $this->date_of_appointment,
            "type" => $this->type,
        ];
    }

    
    private function getFullName()
    {
        $fullName = $this->first_name;

        if ($this->middle_name) {
            $fullName .= ' ' . $this->middle_name;
        }

        if ($this->last_name) {
            $fullName .= ' ' . $this->last_name;
        }

        return $fullName;
    }
}
