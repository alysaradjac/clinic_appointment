<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login_css/login.css">
    <title>Log In</title>
</head>
<body>
    <div class="container">
    <img src="https://i.ibb.co/VLwg3Fp/spc-logo.jpg" style="width=150px; height:150px;">
    <h1>Log In</h1>
    <div class="input-container">
        <form action="{{ route('login') }}" method="POST">
        @csrf
        
        <input type="email" name="email" class="input-field" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email">
        <br><br>
        <input type="password" name="password" id="password" class="input-field" placeholder="Enter your password" autocomplete="current-password">
        <br><br>
        <button type="submit" class="submit">Sign In</button>
        <br><br>
        <a href="/register" style="margin-right:50px;">Not registered? Sign Up here!</a>
        <a href="/doctor/login" style="text-decoration:none; color:black;">Doctor</a>
    </form>
    </div>
</body>
</html>