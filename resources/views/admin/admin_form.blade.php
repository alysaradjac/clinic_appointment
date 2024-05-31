<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin_css/admin_form.css') }}">
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
<div class="a-form">

    <h1>Doctor Schedule Form</h1>

    <form action="{{ route('admin_schedule.store') }}" method="POST">
    @csrf
    
      <input type="hidden" id="role_id" name="role_id">

      <label for="fname">Date:</label><br>
      <input type="date" id="date" name="date"class="date-time"><br><br>

      <h3>Type of Specialist:</h3>
      <input type="radio" name="doctor_type" id="dental" value="Dental" onclick="setRoleId('dental')">
      <label for="dental">Dental</label><br>

      <input type="radio" name="doctor_type" id="annual" value="Annual" onclick="setRoleId('annual')">
      <label for="annual">Annual</label><br>

      <label for="lname">Select Time Availability:</label><br>
      <input type="checkbox" id="time_select" name="time_select[]" value="8:00 - 9:00 A.M.">
      <label for="time_select">8:00 - 9:00 A.M.</label> &nbsp; &nbsp;

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="9:00 - 10:00 A.M.">
      <label for="time_select">9:00 - 10:00 A.M.</label> &nbsp;

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="10:00 - 11:00 A.M.">
      <label for="time_select">10:00 - 11:00 A.M.</label>

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="1:30 - 2:30 P.M.">
      <label for="time_select">1:30 - 2:30 P.M.</label> &nbsp; &nbsp; &nbsp;

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="2:30 - 3:30 P.M.">
      <label for="time_select">2:30 - 3:30 P.M.</label> &nbsp; &nbsp; &nbsp; 

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="3:30 - 4:30 P.M.">
      <label for="time_select">1:30 - 2:30 P.M.</label> &nbsp; &nbsp; &nbsp; 

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>

      <input type="checkbox" id="time_select" name="time_select[]" value="4:30 - 5:30 P.M.">
      <label for="time_select">4:30 - 5:30 P.M.</label> &nbsp; &nbsp; &nbsp; 

      <input type="checkbox" id="not_available" name="not_available[]" value="Not Available">
      <label for="not_available">Not Available</label>
      <br>


     <button type="submit" class="button">Done</button>

     </form>
</div>
</div>
</div>
</form>
<script>
    function setRoleId(doctorType) {
    var roleIdInput = document.getElementById('role_id');
    if (doctorType === 'dental') {
        roleIdInput.value = 1; // Set the role id for Dental
    } else if (doctorType === 'annual') {
        roleIdInput.value = 2; // Set the role id for Annual
    }
}
</script>

</body>
</html>