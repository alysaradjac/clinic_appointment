<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dr_css/doctor_form.css">
</head>
<body>

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="container_left">
    <div class=btn>
            <button type="button" onclick="location.href='doctor_dashboard'">Dasboard</button><br>
            <button type="button" onclick="location.href='doctor_patient'">Appointment</button><br>
            <button type="button" onclick="location.href='doctor_appointment'">Schedule</button><br>
            <button type="button" onclick="location.href='doctor_history'">History</button><br>
            <form action="doctor_login">
                <button type="submit" style="line-height:10;">Logout</button>
            </form>
    </div>
    </div>

<div class="container_right">
<div class="a-form">

    <h1>Doctor Schedule Form</h1>

    <form action="/doctor_appointment">
      <label for="fname">Date:</label><br>
      <input type="date" id="date" name="date"class="date-time"><br><br>

      <label for="lname">Start Time:</label><br>
      <input type="time" id="starttime" name="starttime" class="date-time"><br><br>

      <label for="lname">End Time:</label><br>
      <input type="time" id="endtime" name="endtime" class="date-time"><br><br>

     <button type="submit" class="button">Done</button>

     </form>
</div>
</div>
</div>
</form>


</body>
</html>