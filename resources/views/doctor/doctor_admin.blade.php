<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('login_css/login.css') }}">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <img src="https://i.ibb.co/VLwg3Fp/spc-logo.jpg" style="width=150px; height:150px;">
        <h1>Log In</h1>
        <div class="input-container">
            <form action="{{ route('doctor.logins') }}" method="POST">
                @csrf
                <input type="text" name="email" id="email" class="input-field" placeholder="Enter your email">
                <br><br>
                <input type="password" name="password" id="password" class="input-field" placeholder="Enter your password">
                <br><br>
                <button type="submit" class="submit">Sign In</button>
                <br><br>
                <a href="/login" style="margin-right:50px;">Not a Doctor? Click to go back!</a>
            </form>
        </div>
    </div>
</body>
</html>
