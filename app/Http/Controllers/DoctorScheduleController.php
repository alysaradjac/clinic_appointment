<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;

class DoctorScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showdate()
    {
        return view('admin.admin_schedule');
    }

    public function index()
    {
        $schedule = DoctorSchedule::all();

        return view('admin.admin_form', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    try{
        $validatedData = $request->validate([
            'date' => 'required|date',
            'doctor_type' => 'required|string',
            'avail1' => 'required|string',
            'avail2' => 'required|string',
            'avail3' => 'required|string',
            'avail4' => 'required|string',
            'avail5' => 'required|string',
            'avail6' => 'required|string',
            'avail7' => 'required|string',
            'role_id' => 'required|integer',
            // Add validation rules for other fields
        ]);

        DoctorSchedule::create($validatedData);

        // Redirect to the index page with success message
        return redirect('/doctor_schedule');
    }     catch(\Exception $e){
        // do task when error
        echo $e->getMessage();   // insert query
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = DoctorSchedule::findOrFail($id); // Retrieve the specific schedule by ID
        return view('admin.doctor_schedule.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
