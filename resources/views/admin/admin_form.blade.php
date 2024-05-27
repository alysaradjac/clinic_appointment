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

      <label for="lname">Select Time Availability:</label><br>
      <input type="checkbox" id="time_select" name="time_select[]" value="8:00 - 9:00 A.M.">
      <label for="time_select">8:00 - 9:00 A.M.</label> &nbsp; &nbsp;

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="9:00 - 10:00 A.M.">
      <label for="time_select">9:00 - 10:00 A.M.</label> &nbsp;

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="10:00 - 11:00 A.M.">
      <label for="time_select">10:00 - 11:00 A.M.</label>

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="1:30 - 2:30 P.M.">
      <label for="time_select">1:30 - 2:30 P.M.</label> &nbsp; &nbsp; &nbsp;

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="2:30 - 3:30 P.M.">
      <label for="time_select">2:30 - 3:30 P.M.</label> &nbsp; &nbsp; &nbsp; 

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="3:30 - 4:30 P.M.">
      <label for="time_select">1:30 - 2:30 P.M.</label> &nbsp; &nbsp; &nbsp; 

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="4:30 - 5:30 P.M.">
      <label for="time_select">4:30 - 5:30 P.M.</label> &nbsp; &nbsp; &nbsp; 

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>


     <button type="submit" class="button">Done</button>

     </form>
</div>
</div>
</div>
</form>


</body>
</html>