<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="admin_css/admin_form.css">
</head>
<body>

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="container_left">
    <div class="btn">
            <button type="button" onclick="location.href='admin_dashboard'">Dasboard</button><br>
            <button type="button" onclick="location.href='admin_appointment'">Appointment</button><br>
            <button type="button" onclick="location.href='admin_schedule'">Schedule</button><br>
            <button type="button" onclick="location.href='admin_doctor'">Doctors</button><br>
            <button type="button" onclick="location.href='admin_history'">Patients History</button><br>
            <form action="admin_login">
                <button type="submit">Logout</button>
            </form>
    </div>
    </div>

<div class="container_right">
<div class="a-form">

    <h1>Doctor Schedule Form</h1>

    <form action="/admin_schedule">
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