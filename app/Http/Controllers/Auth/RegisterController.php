<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;

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
        $messages = [
            'password.min' => 'Password must have at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
        ];

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
            'school_id' => 'required|string',
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

            'immunization.bcg' => 'nullable|boolean',
            'immunization.opv' => 'nullable|boolean',
            'immunization.dpt' => 'nullable|boolean',
            'immunization.hepb' => 'nullable|boolean',
            'immunization.measles' => 'nullable|boolean',

            'vaccine.first_dose' => 'nullable|boolean',
            'vaccine.second_dose' => 'nullable|boolean',
            'vaccine.booster1' => 'nullable|boolean',
            'vaccine.booster2' => 'nullable|boolean',
            'vaccine.others' => 'nullable|string', 
        
            // Validate allergies checkboxes
            'allergies.food' => 'nullable|boolean',
            'allergies.drug' => 'nullable|boolean',
            'allergies.insect' => 'nullable|boolean',
            'allergies.pollen' => 'nullable|boolean',
            'allergies.seasonal' => 'nullable|boolean',
            'allergies.environment' => 'nullable|boolean',
            'allergies.allergies_others' => 'nullable|boolean', 
        
            // Validate medical history checkboxes
            'medical_history.asthma' => 'nullable|boolean',
            'medical_history.hyper' => 'nullable|boolean',
            'medical_history.diabetes' => 'nullable|boolean',
            'medical_history.heart' => 'nullable|boolean',
            'medical_history.kidney' => 'nullable|boolean',
            'medical_history.cancer' => 'nullable|boolean',
            'medical_history.tuberculosis' => 'nullable|boolean',
            'medical_history.medical_others' => 'nullable|boolean', 
        
            // Validate paternal checkboxes
            'paternal.paternal1' => 'nullable|boolean',
            'paternal.paternal2' => 'nullable|boolean',
            'paternal.paternal3' => 'nullable|boolean',
            'paternal.paternal4' => 'nullable|boolean',
            'paternal.paternal5' => 'nullable|boolean',
            'paternal.paternal6' => 'nullable|boolean',
            'paternal.paternal7' => 'nullable|boolean',
            'paternal.paternal8' => 'nullable|boolean',
        
            // Validate maternal checkboxes
            'maternal.maternal1' => 'nullable|boolean',
            'maternal.maternal2' => 'nullable|boolean',
            'maternal.maternal3' => 'nullable|boolean',
            'maternal.maternal4' => 'nullable|boolean',
            'maternal.maternal5' => 'nullable|boolean',
            'maternal.maternal6' => 'nullable|boolean',
            'maternal.maternal7' => 'nullable|boolean',
            'maternal.maternal8' => 'nullable|boolean',
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
        $user->school_id = $request->school_id;
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

        $immunization = is_string($request->immunization)? json_decode($request->immunization, true) : $request->immunization;
        $vaccine = is_string($request->vaccine)? json_decode($request->vaccine, true) : $request->vaccine;
        $allergies = is_string($request->allergies)? json_decode($request->allergies, true) : $request->allergies;
        $medical_history = is_string($request->medical_history)? json_decode($request->medical_history, true) : $request->medical_history;
        $paternal = is_string($request->paternal)? json_decode($request->paternal, true) : $request->paternal;
        $maternal = is_string($request->maternal)? json_decode($request->maternal, true) : $request->maternal;

        // Assign the decoded or original data to the user model
        $user->immunization = $immunization;
        $user->vaccine = $vaccine;
        $user->allergies = $allergies;
        $user->medical_history = $medical_history;
        $user->paternal = $paternal;
        $user->maternal = $maternal;

        $user->save();
        return redirect('/login');
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
