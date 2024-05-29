<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin/admin_appointment.css">
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
            <form action="/logout" method="POST">
            @csrf
             <button type="submit">Logout</button>
            </form>
    </div>
    </div>

    <div class="container_right">
        <h2 class="hright">Schedule</h2><br><br>
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


<script src="admin_css/shedule.js"></script>
</div>
</body>
</html>