<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin_css/admin_appointment.css">
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
        <h2 class="hright">Schedule</h2><br><br>
        <div class="calendar">
    <div class="calendar-header">
        <button id="prevMonth" class="prev">&lt;</button>
        <h2>January 2024</h2>
        <button id="nextMonth" class="next">&gt;</button>
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


<script src="admin_css/shedule.js"></script>
    </div>
</body>
</html>