<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dr_css/studen_prof.css">
    <title>Document</title>

</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="">
    <h3>Student Profile</h3>
    <img src="student_profile.jpg" alt="student_profile">


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'appointment_form')">Appointment Form</button>
  <button class="tablinks" onclick="openCity(event, 'medical_record')">Medical Record</button>
  <button class="tablinks" onclick="openCity(event, 'appointment_history')">Appointment History</button>
</div>

<div id="appointment_form" class="tabcontent">
  <p>Appointment Form</p>
    <br>
  <p>Jacklourence Broca</p>
  <p>Full Name</p>
    <br>
  <p>February 5, 2024</p>
  <p>Date</p>
    <br>
  <p>8:00-9:00 AM</p>
  <p>Time</p>
    <br>
  <p>Annual Checkup</p>
  <p>Reason for Appointment</p>
    <br>
  <p>Please describe the symptoms or concerns that you would like to discuss during your appointment time</p>
  <p>N/A</p>

</div>

<div id="medical_record" class="tabcontent">
  <div class="grid-container">
    <div class="grid-item">
      <p>Jacklourence Broca</p>
      <p>Name</p>
        <br>
      <p>jacklourencebroca@gmail.com</p>
      <p>Email</p>
        <br>
      <p>March 19, 2000</p>
      <p>Birthdate</p>
        <br>
      <p>0908123456</p>
      <p>Cotact Number</p>
        <br>
      <p>Tambacan Iligan City</p>
      <p>Address</p>
        <br>
      <p>Jack Broca</p>
      <p>Father's Name</p>
        <br>
      <p>Jill Broca</p>
      <p>Mother's Name</p>
        <br>
      <p>N/A</p>
      <p>Spouse's Name</p>
        <br>
      <p>Jill Broca</p>
      <p>Guardian's Name</p>
        <br>
      <p>Jill Broca</p>
      <p>Person to Notify in Case of Emergency</p>
    </div>

    <div class="grid-item">
      <p>2022-01111</p>
      <p>ID NO.</p>
        <br>
      <p>Male</p>
      <p>Sex</p>
        <br>
      <p>24</p>
      <p>Age</p>
        <br>
      <p>Single</p>
      <p>Civil Status</p>
        <br><br><br><br><br><br>
      <p>09123456789</p>
      <p>Contact No.</p>
        <br>
      <p>09123456789</p>
      <p>Contact No.</p>
        <br>
      <p>09123456789</p>
      <p>Contact No.</p>
        <br>
      <p>09123456789</p>
      <p>Contact No.</p>
        <br>
      <p>09123456789</p>
      <p>Contact No.</p>
        <br>
    </div>


    <div class="grid-item">
      <p>5' 11" ft</p>
      <p>Height</p>
        <br>
      <p>60 kg</p>
      <p>Weight</p>
        <br>
      <p>CSS</p>
      <p>Department</p>
        <br>
      <p>BS IT/ 2nd Year</p>
      <p>Course/Year</p>
        <br>
      <p>N/A</p>
      <p>History of Past Illness</p>
        <br>
      <p>N/A</p>
      <p>Ongoing Health Problems</p>
        <br>
      <p>N/A</p>
      <p>Surgery/Operations</p>
        <br>
      <p>Phizer</p>
      <p>Immunizations</p>
        <br>
      <p>N/A</p>
      <p>Allergies</p>
        <br>
      <p>Diabetes (P)</p>
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



  <script>
    function openCity(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
      }
  </script>
</body>
</html>