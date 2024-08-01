<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dr_css/studen_prof.css') }}">
    <title>Document</title>

</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="">
    <h2>Student Profile</h2>
    <b><a href="/doctor/dashboard" style="margin-left:1450px; font-size:20px; color:white;">Back</a></b>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'appointment_form')">Appointment Form</button>
  <button class="tablinks" onclick="openCity(event, 'medical_record')">Medical Record</button>
  <button class="tablinks" onclick="openCity(event, 'appointment_history')">Appointment History</button>
</div>

<div id="appointment_form" class="tabcontent">
  <center>
  <p style="font-size:30px;">Appointment Form</p>
</center>
    <br>
 <u><p>{{$appointment->firstname}}</p></u>
  <p>First Name</p>
    <br>
    <u><p>{{$appointment->lname}}</p></u>
  <p>Last Name</p>
    <br>
    <u><p>{{$appointment->date}}</p></u>
  <p>Date</p>
    <br>
    <u><p>{{$appointment->time}}</p></u>
  <p>Time</p>
    <br>
    <u><p>{{$appointment->specialist}}</p></u>
  <p>Reason for Appointment</p>

  <a href="/remarks/form" style="font-size:20px; margin-left:1300px; color:white;">Give Remarks</a>
    <br>
  <p>Please describe the symptoms or concerns that you would like to discuss during your appointment time:</p>
  <u><p>{{$appointment->symptoms}}</p></u>
  <br><br><br><br><br>

</div>

<div id="medical_record" class="tabcontent">
  <div class="grid-container">
    <div class="grid-item">
    <u><p>{{$user->name}}</p></u>
      <p>Name</p>
        <br>
        <u><p>{{$user->email}}</p></u>
      <p>Email</p>
        <br>
        <u><p>{{$user->bdate}}</p></u>
      <p>Birthdate</p>
        <br>
        <u><p>{{$user->contact}}</p></u>
      <p>Cotact Number</p>
        <br>
        <u><p>{{$user->caddress}}</p></u>
      <p>Address</p>
        <br>
        <u><p>{{$appointment->haddress}}</p></u>
      <p>Home Address</p>
        <br>
        <u><p>{{$user->fname}}</p></u>
      <p>Father's Name</p>
        <br>
        <u><p>{{$user->mname}}</p></u>
      <p>Mother's Name</p>
        <br>
        <u><p>{{$user->sname}}</p></u>
      <p>Spouse's Name</p>
        <br>
        <u><p>{{$user->guardian}}</p></u>
      <p>Guardian's Name</p>
        <br>
        <u><p>{{$user->emergency}}</p></u>
      <p>Person to Notify in Case of Emergency</p>
    </div>

    <div class="grid-item">
    <u><p>{{$user->school_id}}</p></u>
      <p>ID NO.</p>
        <br>
        <u><p>{{$user->sex}}</p></u>
      <p>Sex</p>
        <br>
        <u><p>{{$user->age}}</p></u>
      <p>Age</p>
        <br>
        <u><p>{{$user->civil_status}}</p></u>
      <p>Civil Status</p>
        <br><br><br><br><br><br><br><br><br><br>
        <u><p>{{$user->contactF}}</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>{{$user->contactM}}</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>{{$user->contactS}}</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>{{$user->contactG}}</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>{{$user->contactP}}</p></u>
      <p>Contact No.</p>
        <br>
    </div>


    <div class="grid-item">
    <u><p>{{$user->height}}</p></u>
      <p>Height</p>
        <br>
        <u><p>{{$user->weight}}</p></u>
      <p>Weight</p>
        <br>
        <u><p>{{$user->dept}}</p></u>
      <p>Department</p>
        <br>
        <u><p>{{$user->course}}</p></u>
      <p>Course/Year</p>
        <br>
        <u><p>{{$user->history}}</p></u>
      <p>History of Past Illness</p>
        <br>
        <u><p>{{$user->health_problems}}</p></u>
      <p>Ongoing Health Problems</p>
        <br>
        <u><p>{{$user->surgery}}</p></u>
      <p>Surgery/Operations</p>
        <br>
        <u><p>{{$appointment->immunization}}</p></u>
      <p>Immunizations</p>
        <br>
        <u><p>{{$appointment->vaccine}}</p></u>
      <p>Vaccine</p>
        <br>
        <u><p>{{$appointment->allergies}}</p></u>
      <p>Allergies</p>
        <br>
        <u><p>{{$appointment->medical_history}} {{$appointment->paternal}} {{$appointment->maternal}}</p></u>
      <p>Family Medical History</p>
    </div>
  </div>
</div>

  <div id="appointment_history" class="tabcontent">
    <table class="stud_table">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
      </tr>

      <tr>
      </tr>
    </table>
  </div>
</div>
<script src="{{ asset('dr_css/studen_prof.js') }}"></script>
</body>
</html>