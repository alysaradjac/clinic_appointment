<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Student Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the container takes up the full height of the viewport */
        }
        .profile-info {
            box-sizing: border-box;
            width: 100%;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: auto; /* Push appointment-info to the bottom */
        }
        .appointment-info {
            box-sizing: border-box;
            width: 100%;
            border: 1px solid #ccc;
            padding: 20px;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        @media (min-width: 768px) {
            .container {
                flex-direction: row;
            }
            .profile-info {
                width: 60%;
                margin-right: 20px;
            }
            .appointment-info {
                width: 40%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-info">
            <p>Clinic Student Profile</p>
            <div>
                <img src="student_picture.jpg" alt="Student Picture">
            </div>
            <h2>Student Information</h2>
            <p><strong>Name:</strong> Emily Johnson</p>
            <p><strong>Age:</strong> 24</p>
            <p><strong>Gender:</strong> Female</p>
            <p><strong>Student ID:</strong> 1234567</p>
            <p><strong>Contact Information:</strong><br>
                Address: 123 Oak Street, Medtown, MA<br>
                Phone: (555) 555-5555<br>
                Email: emily.johnson@example.com
            </p>
            <p><strong>Emergency Contact:</strong><br>
                Name: Sarah Johnson (Mother)<br>
                Phone: (555) 123-4567
            </p>
        </div>

        <div class="appointment-info">
            <p>Current Clinic Appointment</p>
            <p><strong>Date:</strong> March 15, 2024</p>
            <p><strong>Time:</strong> 10:00 AM</p>
        </div>
    </div>
</body>
</html>