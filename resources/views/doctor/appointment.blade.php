<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Apply Appointment</title>
<link rel="stylesheet" href="dr_css/appointment.css">
</head>
<body>

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="container_left">
            <button type="button" onclick="location.href='doctor_dashboard'" class="btn">Dasboard</button><br><br>
            <button type="button" onclick="location.href='doctor_patient'" class="btn">Appointment</button><br><br>
            <button type="button" onclick="location.href='doctor_appointment'" class="btn">Schedule</button><br><br>
            <button type="button" onclick="location.href='doctor_history'" class="btn">History</button><br><br>
            <form action="doctor_login">
                <button type="submit" class="btn">Logout</button>
            </form>
        </td>
    </div>

<div class="container_right">
<div class="calendar">
<div class="calendar-header">
        <button id="prevMonth">&lt;</button>
        <h2>January 2024</h2>
        <button id="nextMonth">&gt;</button>
</div>
<div class="calendar-body">
        <!-- Days will be added dynamically here -->
        <div class="calendar-cell">Sun</div>
        <div class="calendar-cell">Mon</div>
        <div class="calendar-cell">Tue</div>
        <div class="calendar-cell">Wed</div>
        <div class="calendar-cell">Thu</div>
        <div class="calendar-cell">Fri</div>
        <div class="calendar-cell">Sat</div>
        <!-- End of Days -->
</div>
</div>
</div>

<script src="dr_css/shedule.js"></script>
    
</body>
</html>
