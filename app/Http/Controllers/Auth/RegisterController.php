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

            'asthma' => 'nullable|string',
            'paternal1' => 'nullable|string',
            'maternal1' => 'nullable|string',
            'hyper' => 'nullable|string',
            'paternal2' => 'nullable|string',
            'maternal2' => 'nullable|string',
            'diabetes' => 'nullable|string',
            'paternal3' => 'nullable|string',
            'maternal3' => 'nullable|string',
            'heart' => 'nullable|string',
            'paternal4' => 'nullable|string',
            'maternal4' => 'nullable|string',
            'kidney' => 'nullable|string',
            'paternal5' => 'nullable|string',
            'maternal5' => 'nullable|string',
            'cancer' => 'nullable|string',
            'paternal6' => 'nullable|string',
            'maternal6' => 'nullable|string',
            'tuberculosis' => 'nullable|string',
            'paternal7' => 'nullable|string',
            'maternal7' => 'nullable|string',
            'others' => 'nullable|string',
            'paternal8' => 'nullable|string',
            'maternal8' => 'nullable|string',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;

        // Handle checkbox inputs
        $checkboxFields = ['bcg', 'opv', 'dpt', 'hepb', 'measles', '1st', '2nd', 'booster1', 'booster2', 'asthma', 'paternal1', 'maternal1', 'hyper', 'paternal2', 'maternal2', 'diabetes', 'paternal3', 'maternal3', 'heart', 'paternal4', 'maternal4', 'kidney', 'paternal5', 'maternal5', 'cancer', 'paternal6', 'maternal6', 'tuberculosis', 'paternal7', 'maternal7', 'others', 'paternal8', 'maternal8'];
        foreach ($checkboxFields as $field) {
            $user->{$field} = $request->has($field) ? true : false;
        }

        $user->save();

        return redirect()->route('login');
    }
}
