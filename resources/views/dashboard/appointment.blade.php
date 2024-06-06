<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Apply Appointment</title>
<link rel="stylesheet" href="user_css/appointment.css">
<style>
/* Modal CSS */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0, 0, 0); /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

#dentalDate, #annualDate {
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    background-color: #632929;
}
</style>
</head>
<body>

<div class="navbar_top">
    <img src="https://i.ibb.co/ggN6S8v/image-2.png" alt="Logo">
    <a href="/dashboard">Home</a>
    <a href="/personnel">Personnel</a>
    <a href="/appointment">Appointment</a>
    <a href="/profile">Profile</a>
    <form action="/login">
        <button type="submit" class="out">Sign Out</button>
    </form>
</div>

<div class="calendar">
    <div class="calendar-header">
        <button id="prevYear">&lt;&lt;</button>
        <button id="prevMonth">&lt;</button>
        <h2 id="calendarTitle">January 2024</h2>
        <button id="nextMonth">&gt;</button>
        <button id="nextYear">&gt;&gt;</button>
    </div>
    <div class="calendar-body">
        <div class="calendar-cell">Sun</div>
        <div class="calendar-cell">Mon</div>
        <div class="calendar-cell">Tue</div>
        <div class="calendar-cell">Wed</div>
        <div class="calendar-cell">Thu</div>
        <div class="calendar-cell">Fri</div>
        <div class="calendar-cell">Sat</div>
    </div>
</div>

<!-- Modal Structure -->
<div id="appointmentModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="dentalDate"></div>
        <div id="annualDate"></div>
        @if ($errors->any())
            <div class="modal-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Modal functionality
    var modal = document.getElementById("appointmentModal");
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Show modal if there are errors
    @if ($errors->any())
        $(document).ready(function() {
            $('#appointmentModal').show();
        });
    @endif
</script>

<script src="user_css/shedule.js"></script>

</body>
</html>
