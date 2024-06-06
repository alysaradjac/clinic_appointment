<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dr_css/studen_prof.css') }}">
    <script src="{{ asset('dr_css/studen_prof.js') }}"></script>
    <title>Document</title>

</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="">
    <h2>Student Profile</h2>
    <b><a href="/admin/dashboard" style="margin-left:1450px; font-size:20px; color:white;">Back</a></b>


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
 <u><p>{{$appointment->fname}}</p></u>
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
    <br>
  <p>Please describe the symptoms or concerns that you would like to discuss during your appointment time:</p>
  <u><p>{{$appointment->symptoms}}</p></u>

</div>

<div id="medical_record" class="tabcontent">
  <div class="grid-container">
    <div class="grid-item">
    <u><p>{{$appointment->name}}</p></u>
      <p>Name</p>
        <br>
        <u><p>{{$appointment->email}}</p></u>
      <p>Email</p>
        <br>
        <u><p>March 19, 2000</p></u>
      <p>Birthdate</p>
        <br>
        <u><p>0908123456</p></u>
      <p>Cotact Number</p>
        <br>
        <u><p>Tambacan Iligan City</p></u>
      <p>Address</p>
        <br>
        <u><p>Jack Broca</p></u>
      <p>Father's Name</p>
        <br>
        <u><p>Jill Broca</p></u>
      <p>Mother's Name</p>
        <br>
        <u><p>N/A</p></u>
      <p>Spouse's Name</p>
        <br>
        <u><p>Jill Broca</p></u>
      <p>Guardian's Name</p>
        <br>
        <u><p>Jill Broca</p></u>
      <p>Person to Notify in Case of Emergency</p>
    </div>

    <div class="grid-item">
    <u><p>2022-01111</p></u>
      <p>ID NO.</p>
        <br>
        <u><p>Male</p></u>
      <p>Sex</p>
        <br>
        <u><p>24</p></u>
      <p>Age</p>
        <br>
        <u><p>Single</p></u>
      <p>Civil Status</p>
        <br><br><br><br><br><br>
        <u><p>09123456789</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>09123456789</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>09123456789</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>09123456789</p></u>
      <p>Contact No.</p>
        <br>
        <u><p>09123456789</p></u>
      <p>Contact No.</p>
        <br>
    </div>


    <div class="grid-item">
    <u><p>5' 11" ft</p></u>
      <p>Height</p>
        <br>
        <u><p>60 kg</p></u>
      <p>Weight</p>
        <br>
        <u><p>CSS</p></u>
      <p>Department</p>
        <br>
        <u><p>BS IT/ 2nd Year</p></u>
      <p>Course/Year</p>
        <br>
        <u><p>N/A</p></u>
      <p>History of Past Illness</p>
        <br>
        <u><p>N/A</p></u>
      <p>Ongoing Health Problems</p>
        <br>
        <u><p>N/A</p></u>
      <p>Surgery/Operations</p>
        <br>
        <u><p>Phizer</p></u>
      <p>Immunizations</p>
        <br>
        <u><p>N/A</p></u>
      <p>Allergies</p>
        <br>
        <u><p>Diabetes (P)</p></u>
      <p>Family Medical Records</p>
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
        <td>2022-00001</td>
        <td>Jacklourence Broca</td>
        <td>02/05/2024</td>
        <td>8:00-9:00 AM</td>
        <td>Pending</td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>