<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
            $fullName = $request->fullName;
            $names = explode(' ', $fullName);
    
            $query->where(function ($query) use ($names) {
                foreach ($names as $name) {
                    $query->orWhere('first_name', 'LIKE', '%' . $name . '%')
                        ->orWhere('middle_name', 'LIKE', '%' . $name . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $name . '%');
                }
            });
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
