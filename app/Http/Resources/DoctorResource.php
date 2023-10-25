<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
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
            "userName" => $this->username,
            "password" => $this->password,
            "fullName" => $this->full_name,
            "dateOfBirth" => $this->date_of_birth,
            "age" => $this->age,
            "mobileNumber" => $this->mobile_number,
            "email" => $this->email,
            "address" => $this->address,
        ];
    }
}
