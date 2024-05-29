<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt(['name' => $incomingFields['name'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:30', Rule::unique('users', 'name')],
            'email' => ['required', 'min:3', 'max:200', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8', 'max:200'],
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
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user=User::create($incomingFields);
        auth()->login($user);
        return redirect('/register');
    }

    public function setup(Request $request)
    {
        $userId = auth()->user()->id;
        
        $incomingFields = $request->validate([
            'profilePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => ['required', Rule::in([1, 2])]
        ]);

        $user = User::find($userId);

        if ($request->hasFile('profilePicture')) {
            $file = $request->file('profilePicture');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('images/profile'), $filename);

            $user->image = $filename;
        } else {
            $user->image = 'default.png';
        }

        $user->role_id = $request->input('status');

        $user->save();

        return redirect('/')->with('success', 'Profile setup successful!');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }


    //edit controller 

    public function edit($id) {

        $user = User::find($id);

        return view('user.edit', ['user' => $user]);
    }

    public function processEdit(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role_id' => 'required|in:1,2', // Ensure role_id is valid
            'oldpassword' => 'required', // Old password field
            'password' => 'nullable|confirmed|min:6', // Password confirmation and minimum length
        ]);

        // Find the user by ID
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Check if the old password matches
        if (!Hash::check($request->oldpassword, $user->password)) {
            return redirect()->back()->with('error', 'Invalid old password');
        }

        // Update user details
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        
        // Update password if provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        // Save the user
        $user->save();

        // Redirect back with success message
        return redirect()->route('user.edit', ['id' => $id])->with('success', 'User updated successfully');
    }
}


