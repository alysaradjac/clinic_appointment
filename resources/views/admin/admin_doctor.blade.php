<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="{{ asset('admin_css/dashboard.css') }}">
</head>
<body>
    <div class="navbar_top">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
    </div>

    <div class="container">
    <div class="container_left">
    <div class="btn">
            <button type="button" onclick="location.href='admin_dashboard'">Dasboard</button><br>
            <button type="button" onclick="location.href='admin_appointment'">Appointment</button><br>
            <button type="button" onclick="location.href='/doctor_schedule'">Schedule</button><br>
            <button type="button" onclick="location.href='/admin/doctors'">Doctors</button><br>
            <button type="button" onclick="location.href='admin_history'">Patients History</button><br>
            <form action="admin_login">
                <button type="submit" style="line-height:10;">Logout</button>
            </form>
    </div>
    </div>

    <div class="container_right">
        <h2 class="hright">Doctors</h2><br><br>

        <div class="container" style="margin-bottom: 20px;">
    <div class="box" id="profileBox" style="margin-bottom: 20px;">
      <img src="https://i.ibb.co/gtBc8LZ/drpunongbayan.jpg" alt="Profile Image">
      <h2>Dr. Restituto G. Punongbayan</h2>
    </div>
    <div class="box" id="profileBox">
      <img src="https://i.ibb.co/3mwnDfk/drtianco.png" alt="Profile Image" >
      <h2>Dr. Giuseppe S. Tianco, D.M.D.</h2>
    </div>
    <div class="box" id="addProfileBox">
      <div class="add-profile" id="addProfileButton">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
          <path
            d="M17 11h-4v-4c0-.55-.45-1-1-1s-1 .45-1 1v4H7c-.55 0-1 .45-1 1s.45 1 1 1h4v4c0 .55.45 1 1 1s1-.45 1-1v-4h4c.55 0 1-.45 1-1s-.45-1-1-1z" />
        </svg>
        <div>Add Doctor</div>
      </div>
      <form class="registration-form" id="registrationForm" action="{{ route('admin.admin/doctor.store') }}" method="POST">
      @csrf

        <input type="hidden" name="role_id" value="1">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="mobile" placeholder="Phone Number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <p>Type of Doctor</p>
        <input type="checkbox" name="specialist[]" id="dental" value="Dental"><label for="dental">Dental</label><br>
        <input type="checkbox" name="specialist[]" id="annual" value="Annual"><label for="annual">Annual</label><br>
        <button type="submit">Create Profile</button>
      </form>
    </div>
  </div>

  <script>

            function setRoleId(specialist) {
            var roleIdInput = document.getElementById('roleId');
            if (specialist === 'dental') {
                roleIdInput.value = 1; // Set the role id for Dental
            } else if (specialist === 'annual') {
                roleIdInput.value = 2; // Set the role id for Annual
            }
        }

    document.getElementById('addProfileButton').addEventListener('click', function () {
      var registrationForm = document.getElementById('registrationForm');
      if (registrationForm.style.display === 'none') {
        registrationForm.style.display = 'block';
      } else {
        registrationForm.style.display = 'none';
      }
    });
  </script>
    </div>
</body>
</html>