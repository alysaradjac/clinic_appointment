<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="dr_css/dashboard.css">
</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="container_left">
            <button type="button" onclick="location.href='doctor_dashboard'">Dasboard</button><br><br>
            <button type="button" onclick="location.href='admin_appointment'">Appointment</button><br><br>
            <button type="button" onclick="location.href='doctor_patient'">Patients</button><br><br>
            <button type="button" onclick="location.href='doctor_schedule'">Schedule</button><br><br>
            <button type="button" onclick="location.href='doctor_history'">History</button><br><br>
            <form action="doctor_login">
                <button type="submit">Logout</button>
            </form>
        </td>
    </div>

    <div class="container_right">
        <h2 class="hright">Dashboard</h2><br><br>
        <table class="above_table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Reason</th>
        </tr>
        <tr>
            <td>2022-00001</td>
            <td>Jacklourence Broca</td>
            <td>02/05/2024</td>
            <td>8:00-9:00 AM</td>
            <td>Annual Check-Up</td>
        </tr>
    </table>

    <table class="bot_table">
        <tr>
            <th class="th">Total Appointment</th>
            <th class="th">Total Cancelled</th>
        </tr>

        <tr>
            <td class="th">3</td>
            <td class="th">1</td>
        </tr>
    </table>
</div>

</body>
</html>