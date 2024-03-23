<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="user_css/appointment_form.css">
</head>
<body>

<ul>
        <li><image src="https://i.ibb.co/ggN6S8v/image-2.png"></image></li>

        <li><a href="/dashboard">Home</a></li>
        <li><a href="/personnel">Personnel</a></li>
        <li><a href="/appointment">Appointment</a></li>
        <li><a href="profile">Profile</a></li>

        <form action="/login">
            <li><button type="submit" class="out">Sign Out</button></li>
        </form>
</ul>

</body>
</html>

<html>
<body>

<h2>Medical/Dental Clinic</h2>
<h3>APPOINTMENT FORM<h3>

<form action="/appointment">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>

  <div class="reason">Reason for Appointment</div>
  <div class="reason-option">
    <input type="checkbox" id="annual-checkup" class="option-label">
    <label for="annual-checkup" class="option-text">Annual Check-Up</label><br>
    <input type="checkbox" id="annual-checkup" class="option-label">
    <label for="annual-checkup" class="option-text">Annual Check-Up</label><br>
    <input type="checkbox" id="annual-checkup" class="option-label">
    <label for="annual-checkup" class="option-text">Others</label>
  </div>

  <div class="symptoms">Please describe the symptoms or concerns that you would like to discuss during your appointment time.</div>
  <div class="symptoms-input"></div><br>
  <textarea placeholder="Type your other symptoms  here..."></textarea><br>

    <button type="submit">Done</button>
  </div>
</form>


</body>
</html>