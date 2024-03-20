<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile</title>
    <style>
.item1 { grid-area: menu; }
.item2 { grid-area: main; }
.item3 { grid-area: right; }
.item4 { grid-area: footer; }
.item5 { grid-area: cancel; }
.item6 { grid-area: update; }

.grid-container {
  display: grid;
  grid-template-areas:
    'menu main main right right update'
    'footer footer footer footer footer cancel';
  gap: 10px;
  background-color: #FFFFFF;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: left;
  padding: 20px 0;
}
</style>
</head>
<body>
    <div class="">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>

        <a href="/dashboard">Home</a>
        <a href="/personnel">Personnel</a>
        <a href="appointment">Appointment</a>

        <a href="profile">Profile</a>

        <form action="/login">
            <button type="submit">Sign Out</button>
        </form>
    </div>


  <div class="grid-container">
  <div class="item1">
    Student Profile
    <br>
    <img src="student_profile.jpg" alt="student_profile">
  </div>

  <div class="item2">
  <p>Jacklourence Broca</p>
  <p>Name</p>
  <br>
  <p>jacklourencebroca@gmail.com</p>
  <p>Email</p>
  <br>
  <p>March 19, 2000</p>
  <p>Birthdate</p>
  <br>
  <p>0908123456</p>
  <p>Cotact Number</p>
  <br>
  <p>Tambacan Iligan City</p>
  <p>Address</p>
  <br>
  <p>5' 11" ft</p>
  <p>Height</p>
  <br>
  <p>60 kg</p>
  <p>Weight</p>
  <br>
  <p>Jill Broca</p>
  <p>Person to Notify in Case of Emergency</p>
  </div>  


  <div class="item3">
  <p>2022-01111</p>
  <p>ID NO.</p>
  <br>
  <p>Male</p>
  <p>Sex</p>
  <br>
  <p>24</p>
  <p>Age</p>
  <br>
  <p>Single</p>
  <p>Civil Status</p>
  <br>
  <p>CSS</p>
  <p>Department</p>
  <br>
  <p>BS IT/ 2nd Year</p>
  <p>Course/Year</p>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p>09123456789</p>
  <p>Contact No.</p>
  <br>
  </div>

  <div class="item6">
    Update
  </div>

  <div class="item4">
    Current Appointment:
    <br>
    Date: February 5, 2024
    <br>
    Time: 9: 00 PM                                                                

  </div>

  <div class="item5">
    Cancel Appointment
  </div>
</div>

    
</body>
</html>