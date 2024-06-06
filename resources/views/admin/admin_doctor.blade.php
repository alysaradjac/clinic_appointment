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
            <button type="button" onclick="location.href='/admin/dashboard'">Dasboard</button><br>
            <button type="button" onclick="location.href='/admin/appointment'">Patient</button><br>
            <button type="button" onclick="location.href='/admin/doctors'">Doctors</button><br>
            <button type="button" onclick="location.href='/admin/history'">Patients History</button><br>
            <form action="/admin_login">
            <button type="submit" style="margin-top:100px;">Logout</button>
            </form>
    </div>
    </div>

    <div class="container_right">
        <h2 class="hright">Doctors</h2><br><br>

    <div class="box" id="addProfileBox">
      <div class="add-profile" id="addProfileButton">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
          <path
            d="M17 11h-4v-4c0-.55-.45-1-1-1s-1 .45-1 1v4H7c-.55 0-1 .45-1 1s.45 1 1 1h4v4c0 .55.45 1 1 1s1-.45 1-1v-4h4c.55 0 1-.45 1-1s-.45-1-1-1z" />
        </svg>
        <div style="font-size:20px;">Add Specialist</div>
      </div>
      <form class="registration-form" id="registrationForm" action="{{ route('admin_doctor.store') }}" method="POST" style="display: none;">
      @csrf

        <input type="hidden" name="role_id" value="1">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="mobile" placeholder="Phone Number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <p>Type of Specialist</p>
        <input type="radio" name="specialist" id="dental" value="Dental Check-Up"><label for="dental">Dental Check-Up</label><br>
        <input type="radio" name="specialist" id="annual" value="Annual Check-Up"><label for="annual">Annual Check-Up</label><br><br>
        <button type="submit" style="font-size:20px; margin-left:5px;">Create Specialist</button>
      </form><br><br><br>

      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Type of Specialist</th>
        </tr>
        @foreach($doctors as $doctor)
        <tr>
          <td>{{$doctor->name}}</td>
          <td>{{$doctor->email}}</td>
          <td>{{$doctor->mobile}}</td>
          <td>{{$doctor->specialist}}</td>
          <td><a href="{{ url('delete/'.$doctor->id) }}">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

  <script>

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