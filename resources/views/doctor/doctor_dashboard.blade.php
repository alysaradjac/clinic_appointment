<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>

    <link rel="stylesheet" href="{{ asset('dr_css/dashboard.css') }}">
</head>
<body>
    <div class="navbar_top">
        <img src="https://i.ibb.co/ggN6S8v/image-2.png" alt="Logo">
    </div>

    <div class="container">
        <div class="container_left">
            <div class="btn">
                <button type="button" onclick="location.href='/doctor/dashboard'">Dashboard</button><br>
                <button type="button" onclick="location.href='/doctor/history'">History</button><br>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" style="margin-top:200px;">Logout</button>
                </form>
            </div>
        </div>

        <div class="container_right">
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
                        <td>{{ $appointment->firstname }}</td>
                        <td>{{ $appointment->lname }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td>{{ $appointment->specialist }}</td>
                        <td>
                            <a href="{{ route('doctor.view', $appointment->id) }}" style="font-size:20px;">View</a>
                        </td>
                        <td>
                            <a href="{{ route('appointments.finish', $appointment->id) }}" onclick="event.preventDefault(); document.getElementById('finish-form-{{ $appointment->id }}').submit();" style="font-size:20px;">Done</a>
                            <form id="finish-form-{{ $appointment->id }}" action="{{ route('appointments.finish', $appointment->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('POST')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
