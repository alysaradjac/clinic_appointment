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

      <label for="lname">Start Time:</label><br>
      <input type="time" id="starttime" name="starttime" class="date-time"><br><br>

      <label for="lname">End Time:</label><br>
      <input type="time" id="endtime" name="endtime" class="date-time"><br><br>

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