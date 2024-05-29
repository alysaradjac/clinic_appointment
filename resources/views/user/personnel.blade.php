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
      <div class="container">
        <div class="dr1">
          <img src="https://i.ibb.co/gtBc8LZ/drpunongbayan.jpg"><br>
          <p>Dr. Restituto G. Punongbayan</p>
          <p>School Doctor</p>
        </div>
        <br>

        <div class="dr2">
          <img src="https://i.ibb.co/3mwnDfk/drtianco.png"><br>
          <p>Dr. Giuseppe Martin Michael S. Tianco, D.M.D.</p>
          <p>School Dentist</p>
        </div>
        <br>

      <div class="sc1">
        <img src="https://i.ibb.co/xYdwpHK/michelle.png"><br><br>
        <p>Dr. Restituto G. Punongbayan</p>
        <p>School Nurse</p>
      </div>
      </div>
      @endauth
@endsection