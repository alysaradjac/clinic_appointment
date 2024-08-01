<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="{{ asset('user_css/student_prof.css') }}">
</head>
<body>
  
<div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png" class="imglogo"></image>
        <a href="/dashboard">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="appointment">Appointment</a>

        <a href="profile">Profile</a>

        <form action="{{ route('logout') }}" method="POST">
        @csrf
            <button type="submit" class="out">Sign Out</button>
        </form>
</div>



<div class="grid-container">
<div class="item1">
    Student Profile
    <br>
    <img src="student_profile.jpg" alt="student_profile">
  </div>

<div class="item2">
    <u>Christhel Pitos</u>
    <p>Name</p>
  <br>
    <u>miray@gmail.com</u>
    <p>Email</p>
   <br>
    <u>March 19, 2000</u>
    <p>Birthdate</p>
   <br>
    <u>0908123456</u>
    <p>Cotact Number</p>
  <br>
    <u>Tambacan Iligan City</u>
    <p>Address</p>
  <br>
    <u>5' 11" ft</u>
    <p>Height</p>
    <br>
    <u>60 kg</u>
    <p>Weight</p>
  <br>
  <u>Jill Broca</u>
  <p>Guardian</p>
  <br>
    <u>Jill Broca</u>
    <p>Person to Notify in Case of Emergency</p>
</div>  


<div class="item3">
    <u>2022-01111</u>
    <p>ID NO.</p>
    <br>
    <u>Male</u>
    <p>Sex</p>
  <br>
    <u>24</u> 
    <p>Age</p>
  <br>
    <u>Single</u>
    <p>Civil Status</p>
  <br>
    <u>CSS</u>
    <p>Department</p>
  <br>
    <u>BS IT/ 2nd Year</u>
    <p>Course/Year</p>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <u>09123456789</u>
    <p>Contact No.</p>
  <br>
</div>

<div class="item6">
    <p>Update</p>
</div>

<div class="item4">
      <p>Current Appointment:</p>
    <br>
      <p>Date: February 5, 2024</p>
      <p>Time: 9: 00 PM</p>                                                               

</div>

  <div class="item5">
  <a href="" style="text-decoration: none; color: black; font-size:20px;">Cancel Appointment</a>
</div>
</div>  
</body>
</html>