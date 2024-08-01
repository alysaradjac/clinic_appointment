<?php

namespace App\Http\Controllers;

use App\Models\UserAppointment;
use App\Models\User;
use App\Models\Doctor;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AddDoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class UserAppointmentController extends Controller
{
    public function showForm()
    {
        $appointments = UserAppointment::where('specialist', 'Dental Check-Up')->orderBy('date')->get();
        return view('dashboard.appoint_form1', compact('appointments'));
    }

    public function showForm2()
    {
        $appointments = UserAppointment::where('specialist', 'Dental Check-Up')->orderBy('date')->get();
        return view('dashboard.appointment_form2', compact('appointments'));
    }

    public function showForm3()
    {
        $appointments = UserAppointment::where('specialist', 'Dental Check-Up')->orderBy('date')->get();
        return view('dashboard.appointment_form3', compact('appointments'));
    }

    public function showForm4()
    {
        $appointments = UserAppointment::where('specialist', 'Dental Check-Up')->orderBy('date')->get();
        return view('dashboard.appointment_form4', compact('appointments'));
    }

    public function showForm5()
    {
        $appointments = UserAppointment::where('specialist', 'Dental Check-Up')->orderBy('date')->get();
        return view('dashboard.appointment_form5', compact('appointments'));
    }

    public function index()
    {
        $appointments = UserAppointment::where('specialist', 'Dental Check-Up')->orderBy('date')->get();
        return view('dashboard.appointment_form', compact('appointments'));
    }

    public function annual()
    {
        $appointments = UserAppointment::where('specialist', 'Annual Check-Up')->orderBy('date')->get();
        return view('dashboard.annual_form', compact('appointments'));
    }

    public function annual1()
    {
        $appointments = UserAppointment::where('specialist', 'Annual Check-Up')->orderBy('date')->get();
        return view('dashboard.annual_form1', compact('appointments'));
    }

    public function annual2()
    {
        $appointments = UserAppointment::where('specialist', 'Annual Check-Up')->orderBy('date')->get();
        return view('dashboard.annual_form2', compact('appointments'));
    }

    public function annual3()
    {
        $appointments = UserAppointment::where('specialist', 'Annual Check-Up')->orderBy('date')->get();
        return view('dashboard.annual_form3', compact('appointments'));
    }

    public function annual4()
    {
        $appointments = UserAppointment::where('specialist', 'Annual Check-Up')->orderBy('date')->get();
        return view('dashboard.annual_form4', compact('appointments'));
    }

    public function annual5()
    {
        $appointments = UserAppointment::where('specialist', 'Annual Check-Up')->orderBy('date')->get();
        return view('dashboard.annual_form5', compact('appointments'));
    }

    public function fetch()
    {
        $appointments = UserAppointment::where('status', '!=', 'finished')->get();
        return view('admin.admin_dashboard', compact('appointments'));
    }

    public function adminhistory()
    {
        $appointments = UserAppointment::where('status', 'finished')->orderBy('date')->get();
        return view('admin.admin_history', compact('appointments'));
    }

    public function view($id)
    {
        $appointment = UserAppointment::find($id);
        $user = User::find($id);
    
        if (!$appointment) {
            // Handle the case where the appointment is not found
            return redirect('/admin/dashboard')->with('error', 'Appointment not found.');
        }
    
        return view('admin.admin_view', compact('appointment' , 'user'));
    }
    

    public function doctor($id)
    {
        $appointment = UserAppointment::find($id);
        $user = User::find($id);
    
        if (!$appointment) {
            // Handle the case where the appointment is not found
            return redirect('/doctor/dashboard')->with('error', 'Appointment not found.');
        }

        $appointment->immunization = json_encode($appointment->immunization);
        $appointment->vaccine = json_encode($appointment->vaccine);
        $appointment->allergies = json_encode($appointment->allergies);
        $appointment->medical_history = json_encode($appointment->medical_history);
        $appointment->paternal = json_encode($appointment->paternal);
        $appointment->maternal = json_encode($appointment->maternal);
    
        return view('doctor.doctor_view', compact('appointment','user'));
    }

    public function doctors($id)
    {
        $appointment = User::find($id);
    
        if (!$appointment) {
            // Handle the case where the appointment is not found
            return redirect('/doctor/dashboard')->with('error', 'Appointment not found.');
        }

        $appointment->immunization = json_encode($appointment->immunization);
        $appointment->vaccine = json_encode($appointment->vaccine);
        $appointment->allergies = json_encode($appointment->allergies);
        $appointment->medical_history = json_encode($appointment->medical_history);
        $appointment->paternal = json_encode($appointment->paternal);
        $appointment->maternal = json_encode($appointment->maternal);
    
        return view('doctor.doctor_view', compact('appointment'));
    }

    public function userview($id)
    {
        $appointment = User::find($id);
    
        if (!$appointment) {
            // Handle the case where the appointment is not found
            return redirect('/admin/dashboard')->with('error', 'Appointment not found.');
        }

        $appointment->immunization = json_encode($appointment->immunization);
        $appointment->vaccine = json_encode($appointment->vaccine);
        $appointment->allergies = json_encode($appointment->allergies);
        $appointment->medical_history = json_encode($appointment->medical_history);
        $appointment->paternal = json_encode($appointment->paternal);
        $appointment->maternal = json_encode($appointment->maternal);
    
        return view('admin.admin_view', compact('appointment'));
    }
    

    public function doctorview()
    {
        // Fetch appointments based on the specialist of the authenticated doctor
        $appointments = UserAppointment::where('status', '!=', 'finished')->get();
        return view('doctor.doctor_dashboard', compact('appointments'));
    }
    

    public function markAsFinished($id)
    {
        $appointment = UserAppointment::find($id);
    
        if (!$appointment) {
            return redirect('/doctor/dashboard')->with('error', 'Appointment not found.');
        }
    
        $appointment->update(['status' => 'finished']);
    
        return redirect()->back()->with('success', 'Appointment marked as finished.');
    }
    
    public function fetchFinished()
    {
        $appointments = UserAppointment::where('status', 'finished')->orderBy('date')->get();
        return view('doctor.doctor_history', compact('appointments'));
    }
    


    public function create()
    {
        // Create method
    }

    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'firstname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'date' => 'required|date',
                'time' => 'required|string',
                'specialist' => 'required|string',
                'symptoms' => 'nullable|string',
            ]);
            
            $user_id = auth()->user()->id;

            $validatedData['user_id'] = $user_id;

            // Check for duplicate appointment
            $duplicate = UserAppointment::where('date', $validatedData['date'])
                                        ->where('time', $validatedData['time'])
                                        ->where('specialist', $validatedData['specialist'])
                                        ->exists();
    
        if ($duplicate) {
            // Display alert and redirect to homepage
            echo "<script>alert('Appointment already been booked by someone else or Check your profile maybe your profile if you booked it or not.'); window.location.href='/appointment';</script>";
            exit; // Terminate further script execution
        }
    
            UserAppointment::create($validatedData);
    
            return redirect('/appointment')->with('success', 'Appointment created successfully.');
       
    }
    

    public function show(UserAppointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    public function edit(UserAppointment $appointment)
    {
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, UserAppointment $appointment)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'specialist' => 'required|string',
            'symptoms' => 'nullable|string',
        ]);

        $appointment->update($validatedData);

        return redirect('/appointments')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(UserAppointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}