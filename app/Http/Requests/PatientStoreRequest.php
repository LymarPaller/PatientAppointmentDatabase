<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PatientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //

            'fullName' => 'required',
            "dateOfAppointment" => 'required',
            "dateOfBirth" => 'required',
            "mobileNumber" => 'required',
            "address" => '',
            "email" => '',
            "age"=> '',
            "blood_type"=> '',
            "type"=> '',
            "status"=> '',
            "vitalsId"=> '',
            "prescriptionId"=> '',
            "doctorsId"=> '',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors(),
        ]));
    }
}
