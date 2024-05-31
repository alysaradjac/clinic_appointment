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
    <div class="btn">
            <button type="button" onclick="location.href='doctor_dashboard'" class="btn">Dasboard</button><br>
            <button type="button" onclick="location.href='doctor_patient'" class="btn">Appointment</button><br>
            <button type="button" onclick="location.href='doctor_appointment'" class="btn">Schedule</button><br>
            <button type="button" onclick="location.href='doctor_history'" class="btn">History</button><br>
            <form action="doctor_login">
                <button type="submit" class="btn" style="line-height:10;">Logout</button>
            </form>
        </td>
    </div>
    </div>

<div class="container_right">
<div class="calendar">
    <div class="calendar-header">
        <button id="prevYear" class="prevyr">&lt;&lt;</button>
        <button id="prevMonth" class="prevmt">&lt;</button>
        <span id="calendarTitle">January 2024</span>
        <button id="nextMonth" class="nextmt">&gt;</button>
        <button id="nextYear" class="nextyr">&gt;&gt;</button>
    </div>
    <div class="calendar-body">
        <div class="calendar-cell">Sun</div>
        <div class="calendar-cell">Mon</div>
        <div class="calendar-cell">Tue</div>
        <div class="calendar-cell">Wed</div>
        <div class="calendar-cell">Thu</div>
        <div class="calendar-cell">Fri</div>
        <div class="calendar-cell">Sat</div>
    </div>
</div>

<script src="dr_css/shedule.js"></script>
    
</body>
</html>
