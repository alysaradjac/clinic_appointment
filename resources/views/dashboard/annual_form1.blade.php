<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('user_css/appointment_form.css') }}">
</head>
<body>

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png" class="imglogo"></image>
        <a href="/dashboard">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="/appointment">Appointment</a>

        <a href="/profile">Profile</a>

        <form action="/login">
            <button type="submit" class="out">Sign Out</button>
        </form>
</div>

<div class="a-form">
    <h2>Medical/Dental Clinic</h2>
    <h3>APPOINTMENT FORM</h3>

    <form action="{{ route('appointments.store') }}" method="POST">
    @csrf
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname"><br><br>

      <label for="date">Date</label><br>
      <input type="date" name="date" id="date" required>

      <label for="time">Select Time</label>
      <select name="time" id="time">
            <optgroup label="A.M.">
            <option value="9:00-10:00 A.M.">9:00-10:00 A.M.</option>
      </select><br><br>

<div class="reason">Reason for Appointment</div><br>
<div class="reason-option">
      <input type="radio" id="annual-checkup" name="specialist" value="Annual Check-Up" class="option-label" required>
      <label for="annual-checkup" class="option-text">Annual Check-Up</label><br>
</div><br>

<div class="symptoms">
      Please describe the symptoms or concerns that you would like to discuss during your appointment time.
</div>
<div class="symptoms-input"></div><br>
      <textarea name="symptoms" placeholder="Type your other symptoms  here..."></textarea><br>

     <button type="submit" class="btn">Done</button> <button type="button" class="cancel" onclick="location.href='/appointment'">Cancel</button>
</div>
</div>
</form>


</body>
</html>