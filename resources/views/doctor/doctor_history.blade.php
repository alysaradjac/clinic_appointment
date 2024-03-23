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
            <button type="button" onclick="location.href='doctor_patient'">Appoinment</button><br><br>
            <button type="button" onclick="location.href='doctor_appointment'">Schedule</button><br><br>
            <button type="button" onclick="location.href='doctor_history'">History</button><br><br>
            <form action="doctor_login">
                <button type="submit">Logout</button>
            </form>
        </td>
    </div>

    <div class="container_right">
        <h2 class="hright">History</h2><br><br>
        <table class="above_table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Remarks</th>
        </tr>
        <tr>
            <td>2022-00001</td>
            <td>Jacklourence Broca</td>
            <td>02/05/2024</td>
            <td>8:00-9:00 AM</td>
            <td><a href="/remarks">Remarks</a></td>
        </tr>
    </div>
    </table>
</body>
</html>