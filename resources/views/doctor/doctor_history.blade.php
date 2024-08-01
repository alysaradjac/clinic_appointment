<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('dr_css/dashboard.css') }}">
</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="container_left">
    <div class="btn">
            <button type="button" onclick="location.href='/doctor/dashboard'">Dasboard</button><br>
            <button type="button" onclick="location.href='/doctor/history'">History</button><br>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="margin-top:200px;">Logout</button>
            </form>
        </td>
    </div>
    </div>

    <div class="container_right">
        <h2 class="hright">History</h2><br><br>
        <table class="above_table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Reason</th>
        </tr>
        <tr>
        @foreach($appointments as $appointment)
                <td>{{ $appointment->firstname }}</td>
                <td>{{ $appointment->lname }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->time }}</td>
                <td>{{ $appointment->specialist }}</td>
            <td><a href="/doctor/remark/{id}">Remarks</a></td>
        </tr>
        @endforeach
    </div>
    </table>
</body>
</html>