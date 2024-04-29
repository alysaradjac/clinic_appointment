<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('forms.register');
    }

    public function registerPost(Request $request)
    {
        // Validate the form data
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

            // Checkbox List
            'food' => 'nullable|boolean',
            'drug' => 'nullable|boolean',
            'insect' => 'nullable|boolean',
            'pollen' => 'nullable|boolean',
            'seasonal' => 'nullable|boolean',
            'environment' => 'nullable|boolean',
            'others' => 'nullable|boolean',

            'food' => 'nullable|boolean',
            'drug' => 'nullable|boolean',
            'insect' => 'nullable|boolean',
            'pollen' => 'nullable|boolean',
            'seasonal' => 'nullable|boolean',
            'environment' => 'nullable|boolean',
            'others' => 'nullable|boolean',

            'asthma' => 'nullable|boolean',
            'paternal1' => 'nullable|boolean',
            'maternal1' => 'nullable|boolean',
            'hyper' => 'nullable|boolean',
            'paternal2' => 'nullable|boolean',
            'maternal2' => 'nullable|boolean',
            'diabetes' => 'nullable|boolean',
            'paternal3' => 'nullable|boolean',
            'maternal3' => 'nullable|boolean',
            'heart' => 'nullable|boolean',
            'paternal4' => 'nullable|boolean',
            'maternal4' => 'nullable|boolean',
            'kidney' => 'nullable|boolean',
            'paternal5' => 'nullable|boolean',
            'maternal5' => 'nullable|boolean',
            'cancer' => 'nullable|boolean',
            'paternal6' => 'nullable|boolean',
            'maternal6' => 'nullable|boolean',
            'tuberculosis' => 'nullable|boolean',
            'paternal7' => 'nullable|boolean',
            'maternal7' => 'nullable|boolean',
            'others' => 'nullable|boolean',
            'paternal8' => 'nullable|boolean',
            'maternal8' => 'nullable|boolean',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;

        // Handle checkbox inputs
        $checkboxFields = ['bcg', 'opv', 'dpt', 'hepb', 'measles', '1st', '2nd', 'booster1', 'booster2', 'asthma', 'paternal1', 'maternal1', 'hyper', 'paternal2', 'maternal2', 'diabetes', 'paternal3', 'maternal3', 'heart', 'paternal4', 'maternal4', 'kidney', 'paternal5', 'maternal5', 'cancer', 'paternal6', 'maternal6', 'tuberculosis', 'paternal7', 'maternal7', 'others', 'paternal8', 'maternal8', 'food', 'drug', 'insect', 'pollen', 'seasonal', 'environment', 'others'];

        foreach ($checkboxFields as $field) {
            // Check if checkbox is checked
            $user->{$field} = $request->has($field);
        }

        $user->save();

        return redirect()->route('forms.login');
    }
}
