<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'email' => 'required|string|email|max:255|unique:users',
            'bdate' => 'required|date',
            'contact' => 'required|string',
            'caddress' => 'required|string',
            'haddress' => 'required|string',
            'fname' => 'required|string',
            'mname' => 'required|string',
            'guardian' => 'required|string',
            'emergency' => 'required|string',
            'history' => 'required|string',
            'health_problems' => 'required|string',
            'surgery' => 'required|string',
            'id' => 'required|string',
            'dept' => 'required|string',
            'course' => 'required|string',
            'age' => 'required|string',
            'sex' => 'required|string',
            'civil_status' => 'required|string',
            'religion' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
            'contactF' => 'required|string',
            'contactM' => 'required|string',
            'contactG' => 'required|string',
            'contactP' => 'required|string',
            'others' => 'required|string',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->bdate = $request->bdate;
        $user->contact = $request->contact;
        $user->caddress = $request->caddress;
        $user->haddress = $request->haddress;
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->guardian = $request->guardian;
        $user->emergency = $request->emergency;
        $user->history = $request->history;
        $user->health_problems = $request->health_problems;
        $user->surgery = $request->surgery;
        $user->id = $request->id;
        $user->dept = $request->dept;
        $user->course = $request->course;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->civil_status = $request->civil_status;
        $user->religion = $request->religion;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->contactF = $request->contactF;
        $user->contactM = $request->contactM;
        $user->contactG = $request->contactG;
        $user->contactP = $request->contactP;
        $user->others = $request->others;

        // Handle immunization checkbox fields
        $user->immunization = [
            'bcg' => $request->has('immunization') && in_array('bcg', $request->immunization),
            'opv' => $request->has('immunization') && in_array('opv', $request->immunization),
            'dpt' => $request->has('immunization') && in_array('dpt', $request->immunization),
            'hepb' => $request->has('immunization') && in_array('hepb', $request->immunization),
            'measles' => $request->has('immunization') && in_array('measles', $request->immunization),
        ];

        // Handle vaccination checkbox fields
        $user->vaccine = [
            'first_dose' => $request->has('vaccination') && in_array('first_dose', $request->vaccination),
            'second_dose' => $request->has('vaccination') && in_array('second_dose', $request->vaccination),
            'booster1' => $request->has('vaccination') && in_array('booster1', $request->vaccination),
            'booster2' => $request->has('vaccination') && in_array('booster2', $request->vaccination),
            'others' => $request->vaccine_others,
        ];

        // Handle allergies checkbox fields
        $user->allergies = [
            'food' => $request->has('allergies') && in_array('food', $request->allergies),
            'drug' => $request->has('allergies') && in_array('drug', $request->allergies),
            'insect' => $request->has('allergies') && in_array('insect', $request->allergies),
            'pollen' => $request->has('allergies') && in_array('pollen', $request->allergies),
            'seasonal' => $request->has('allergies') && in_array('seasonal', $request->allergies),
            'environment' => $request->has('allergies') && in_array('environment', $request->allergies),
            'others' => $request->allergies_others, // Assuming the 'others' textarea contains additional allergy details
        ];
        
        // Handle medical history checkbox fields...
        $user->medical_history = [
            'asthma' => $request->has('medical_history') && in_array('asthma', $request->medical_history),
            'paternal1' => $request->has('medical_history') && in_array('paternal1', $request->medical_history),
            'maternal1' => $request->has('medical_history') && in_array('maternal1', $request->medical_history),

            'hyper' => $request->has('medical_history') && in_array('hyper', $request->medical_history),
            'paternal2' => $request->has('medical_history') && in_array('paternal2', $request->medical_history),
            'maternal2' => $request->has('medical_history') && in_array('maternal2', $request->medical_history),

            'diabetes' => $request->has('medical_history') && in_array('diabetes', $request->medical_history),
            'paternal3' => $request->has('medical_history') && in_array('paternal3', $request->medical_history),
            'maternal3' => $request->has('medical_history') && in_array('maternal3', $request->medical_history),

            'heart' => $request->has('medical_history') && in_array('heart', $request->medical_history),
            'paternal4' => $request->has('medical_history') && in_array('paternal4', $request->medical_history),
            'maternal4' => $request->has('medical_history') && in_array('maternal4', $request->medical_history),

            'kidney' => $request->has('medical_history') && in_array('kidney', $request->medical_history),
            'paternal5' => $request->has('medical_history') && in_array('paternal5', $request->medical_history),
            'maternal5' => $request->has('medical_history') && in_array('maternal5', $request->medical_history),

            'cancer' => $request->has('medical_history') && in_array('cancer', $request->medical_history),
            'paternal6' => $request->has('medical_history') && in_array('paternal6', $request->medical_history),
            'maternal6' => $request->has('medical_history') && in_array('maternal6', $request->medical_history),

            'tuberculosis' => $request->has('medical_history') && in_array('tuberculosis', $request->medical_history),
            'paternal7' => $request->has('medical_history') && in_array('paternal7', $request->medical_history),
            'maternal7' => $request->has('medical_history') && in_array('maternal7', $request->medical_history),

            'medical_others' => $request->has('medical_history') && in_array('medical_others', $request->medical_history),
            'paternal8' => $request->has('medical_history') && in_array('paternal8', $request->medical_history),
            'maternal8' => $request->has('medical_history') && in_array('maternal8', $request->medical_history),
        ];

        // Handle paternal checkbox fields
        $user->paternal = [
            'paternal1' => $request->has('paternal') && in_array('paternal1', $request->paternal),
            'paternal2' => $request->has('paternal') && in_array('paternal2', $request->paternal),
            'paternal3' => $request->has('paternal') && in_array('paternal3', $request->paternal),
            'paternal4' => $request->has('paternal') && in_array('paternal4', $request->paternal),
            'paternal5' => $request->has('paternal') && in_array('paternal5', $request->paternal),
            'paternal6' => $request->has('paternal') && in_array('paternal6', $request->paternal),
            'paternal7' => $request->has('paternal') && in_array('paternal7', $request->paternal),
            'paternal8' => $request->has('paternal') && in_array('paternal8', $request->paternal),
        ];

        // Handle maternal checkbox fields
        $user->maternal = [
            'maternal1' => $request->has('maternal') && in_array('maternal1', $request->maternal),
            'maternal2' => $request->has('maternal') && in_array('maternal2', $request->maternal),
            'maternal3' => $request->has('maternal') && in_array('maternal3', $request->maternal),
            'maternal4' => $request->has('maternal') && in_array('maternal4', $request->maternal),
            'maternal5' => $request->has('maternal') && in_array('maternal5', $request->maternal),
            'maternal6' => $request->has('maternal') && in_array('maternal6', $request->maternal),
            'maternal7' => $request->has('maternal') && in_array('maternal7', $request->maternal),
            'maternal8' => $request->has('maternal') && in_array('maternal8', $request->maternal),
        ];


        $user->save();

        return redirect()->route('sucessful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Logic for displaying a specific user if needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Logic for editing a specific user if needed
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Logic for updating a specific user if needed
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Logic for deleting a specific user if needed
    }
}
