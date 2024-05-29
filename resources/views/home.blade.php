@extends('layouts.layout')

@section('content')
    @auth
        @section('css', 'css/user.css')

<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png" class="imglogo"></image>
        <a href="/">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="appointment">Appointment</a>
        <a href="profile">Profile</a>
        <div class="user-avatar">
        <img id="profile" src="{{ asset('images/profile/' . Auth::user()->image) }}" style="width: 60px; height: 60px;" alt="Profile Picture">
        </div>
           
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="out">Sign Out</button>
        </form>
</div>


        <div class="content">
    <h1>About</h1>
    <p>St. Peter’s College Medical and Dental Service Unit is dedicated to providing comprehensive medical and dental services to students, faculty, and staff. The clinic offers a wide range of healthcare services, including routine check-ups, vaccinations, minor treatments, and preventive care. It is staffed by a team of experienced medical professionals who are committed to delivering high-quality healthcare in a compassionate and efficient manner.</p><br>

    <h1>Dental Unit</h1>
    <p>The school management is delighted to announce the acquisition of a brand new, cutting-edge dental unit that has been installed in our very own clinic. The acquisition of this state-of-the-art dental unit further strengthens St. Peter’s College’s commitment to fostering overall wellness and promoting excellent oral health within our vibrant community. By providing convenient access to exceptional dental care, we aim to enhance the overall educational experience and promote healthy lifestyles for all.</p><br>

    <img src="https://i.ibb.co/MZB9bXs/431042866-1102282474345126-7480418934183762545-n.png" alt="431042866-1102282474345126-7480418934183762545-n" border="0" class="img"></a><br>

    <button type="submit" onclick="location.href='/appointment'" class="book_now">Book Now</button>

    <h3>
        Contact Us<br>
        Clinic Office<br>
        spcmedicaldentalclinic2021@gmail.com<br>
        (+63) 926 285 576
    </h3>
</div>
    @else
        @section('css', 'css/login.css')
        @section('title', 'Login')
        <div class="container">
    <img src="https://i.ibb.co/VLwg3Fp/spc-logo.jpg" style="width=150px; height:150px;">
    <h1>Log In</h1>
    <div class="input-container">
    <form action="/login" method="POST">
                @csrf
        <input type="name" name="name" class="input-field" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email">
        <br><br>
        <input type="password" name="password" id="password" class="input-field" placeholder="Enter your password" autocomplete="current-password">
        <br><br>
        <button type="submit" class="submit">Sign In</button>
        <br><br>
        <a href="/register" style="margin-right:50px;">Not registered? Sign Up here!</a>
    </form>
    </div>
    @endauth
@endsection