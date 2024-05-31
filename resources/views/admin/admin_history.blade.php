<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin_css/dashboard.css">
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
            <button type="button" onclick="location.href='/doctor_schedule'">Schedule</button><br>
            <button type="button" onclick="location.href='/admin/doctors'">Doctors</button><br>
            <button type="button" onclick="location.href='admin_history'">Patients History</button><br>
            <form action="admin_login">
                <button type="submit" style="line-height:10;">Logout</button>
            </form>
    </div>
    </div>

    <div class="container_right">
        <h2 class="hright">Clinic History</h2><br><br>
        <table class="above_table">
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Remarks</th>
        </tr>

        <tr>
            <td>Jacklourence Broca</td>
            <td>02/05/2023</td>
            <td>8:00 - 9:00 A.M.</td>
            <td><a href="/remarks">Remarks</a></td>
        </tr>

        <tr>
            <td>Alysa Joy Radjac</td>
            <td>02/05/2023</td>
            <td>9:00 - 10:00 A.M.</td>
            <td><a href="/remarks">Remarks</a></td>
        </tr>
        </table>
    </div>
</body>
</html>