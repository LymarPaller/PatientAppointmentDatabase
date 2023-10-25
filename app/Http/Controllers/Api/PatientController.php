<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientStoreRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // return PatientResource::collection(Patient::all());

        $query = Patient::query();

        if ($request->has('fullName')) {
            $query->where('full_name', 'LIKE', '%' . $request->input('fullName') . '%');
        }

        if ($request->has('mobileNumber')) {
            $query->where('mobile_number', 'LIKE', '%' . $request->input('mobileNumber') . '%');
        }

        return PatientResource::collection($query->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientStoreRequest $request)
    {
        //
        return PatientResource::make(
            Patient::create([
                'full_name' => $request->fullName,
                'date_of_appointment' => $request->dateOfAppointment,
                'date_of_birth' => $request->dateOfBirth,
                'mobile_number' => $request->mobileNumber,
                'address' => $request->address,
                'email' => $request->email,
                'age' => $request->age,
                'blood_type' => $request->bloodType,
                'type' => $request->type,
                'status' => $request->status,
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
        return PatientResource::make(($patient));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
