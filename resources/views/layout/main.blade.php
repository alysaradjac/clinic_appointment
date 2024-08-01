<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apply Appointment</title>
            <link rel="stylesheet" href="user_css/appointment.css">
</head>
<body>

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png" class="imglogo"></image>
        <a href="/dashboard">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="appointment">Appointment</a>

        <a href="/profile">Profile</a>

        <form action="{{ route('logout') }}" method="POST">
        @csrf
            <button type="submit" class="out">Sign Out</button>
        </form>
</div>

    
</body>
</htm
