<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Appointment</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>

        <a href="/">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="appointment">Appointment</a>
        <a href="profile">Profile</a>
        <div class="user-avatar">
        <img id="profile" src="{{ asset('images/profile/' . Auth::user()->image) }}" style="width: 60px; height: 60px;" alt="Profile Picture">
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="out">Sign Out</button>
        </form>
</div>

<div class="calendar">
    <div class="calendar-header">
        <button id="prevYear">&lt;&lt;</button>
        <button id="prevMonth">&lt;</button>
        <h2 id="calendarTitle">January 2024</h2>
        <button id="nextMonth">&gt;</button>
        <button id="nextYear">&gt;&gt;</button>
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

<script src="js/schedule.js"></script>
    
</body>
</html>