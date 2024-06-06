<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin_css/dashboard.css') }}">
</head>
<body>
    <div class="navbar_top">
        <img src="https://i.ibb.co/ggN6S8v/image-2.png" alt="Logo">
    </div>

    <div class="container">
        <div class="container_left">
            <div class="btn">
                <button type="button" onclick="location.href='/admin/dashboard'">Dashboard</button><br>
                <button type="button" onclick="location.href='/admin/doctors'">Doctors</button><br>
                <button type="button" onclick="location.href='/admin_history'">Patients History</button><br>
                <form action="/admin_login">
                    <button type="submit" style="margin-top:100px;">Logout</button>
                </form>
            </div>
        </div>

        <div class="container_right">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <h2 class="hright">Dashboard</h2><br><br>
            <table class="above_table">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Reason</th>
                </tr>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->fname }}</td>
                    <td>{{ $appointment->lname }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->specialist }}</td>
                    <td><a href="/admin/view/{{ $appointment->id }}">View</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
