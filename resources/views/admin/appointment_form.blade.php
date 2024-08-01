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