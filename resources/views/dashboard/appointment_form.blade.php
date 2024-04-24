<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="user_css/appointment_form.css">
</head>
<body>

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png" class="imglogo"></image>
        <a href="/dashboard">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="appointment">Appointment</a>

        <a href="profile">Profile</a>

        <form action="/login">
            <button type="submit" class="out">Sign Out</button>
        </form>
</div>

<div class="a-form">
    <h2>Medical/Dental Clinic</h2>
    <h3>APPOINTMENT FORM</h3>

    <form action="/appointment">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" value=""><br><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" value=""><br><br>

<div class="reason">Reason for Appointment</div><br>
<div class="reason-option">
      <input type="checkbox" id="dental-checkup" class="option-label">
      <label for="dental-checkup" class="option-text">Dental Check-Up</label><br>
      <input type="checkbox" id="annual-checkup" class="option-label">
      <label for="annual-checkup" class="option-text">Annual Check-Up</label><br>
      <input type="checkbox" id="annual-checkup" class="option-label">
      <label for="annual-checkup" class="option-text">Others</label>
</div><br>

<div class="symptoms">
      Please describe the symptoms or concerns that you would like to discuss during your appointment time.
</div>
<div class="symptoms-input"></div><br>
      <textarea placeholder="Type your other symptoms  here..."></textarea><br>

     <button type="submit" class="btn">Done</button>
</div>
</div>
</form>


</body>
</html>