<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admindashboard.css">
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
        <h2 class="hright">Dashboard</h2><br><br>
        <table class="above_table">
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Reason</th>
        </tr>

        <tr>
            <td>Jacklourence Broca</td>
            <td>02/05/2023</td>
            <td>8:00 - 9:00 A.M.</td>
            <td>Annual Check-Up</td>
        </tr>

        <tr>
            <td>Alysa Joy Radjac</td>
            <td>02/05/2023</td>
            <td>9:00 - 10:00 A.M.</td>
            <td>Dental Check-Up</td>
        </tr>
        </table>
    </div>
</body>
</html>