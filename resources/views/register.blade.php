<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<div class="navbar">
    <img src="https://i.ibb.co/ggN6S8v/image-2.png" class="img" alt="Logo">
</div>

<div class="container">
    <h3 style="text-align:center;">Medical/Dental<br>
        INDIVIDUAL HEALTH RECORD</h3><br><br>
        <form action="/register" method="POST">
        @csrf
            
        <div class="input-field">
            
            <input type="text" name="name" id="name" required placeholder="Enter your name"><br>
            <label for="name">Name</label><br>

            <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="Must contain at least 8 letters"> @error('password') <span class="text-danger" style="color:red;">{{ $message }}</span> @enderror<br>
            <label for="password">Password</label><br>

            <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Must contain 8 letters" autocomplete="new-password"></br>
            <label for="password_confirmation">Confirm Password</label><br>

            <input type="email" name="email" id="email" required autocomplete="current-email" placeholder="Enter your email"><br>
            <label for="email">Email</label><br>

            <input type="date" name="bdate" id="bdate" required><br>
            <label for="bdate">Birthdate</label><br>

            <input type="tel" name="contact" id="contact" required placeholder="Enter your contact number"><br>
            <label for="contact">Contact No.</label><br>

            <input type="text" name="caddress" id="caddress" required placeholder="Enter your city address"><br>
            <label for="caddress">City Address</label><br>

            <input type="text" name="haddress" id="haddress" required placeholder="Enter your home address"><br>
            <label for="haddress">Home Address</label><br>

            <input type="text" name="fname" id="fname" required placeholder="Enter your father's name"><br>
            <label for="fname">Father's Name</label><br>

            <input type="text" name="mname" id="mname" required placeholder="Enter your mother's name"><br>
            <label for="mname">Mother's Name</label><br>

            <input type="text" name="sname" id="sname" placeholder="Enter your spouse name (if you married)"><br>
            <label for="sname">Spouse Name (if married)</label><br>

            <input type="text" name="guardian" id="guardian" required placeholder="Enter your guardian's name"><br>
            <label for="guardian">Guardian</label><br>

            <input type="text" name="emergency" id="emergency" required placeholder="Enter your emergency pesonnel name"><br>
            <label for="emergency">Person To Notify In Case of Emergency</label><br>

            <input type="text" name="history" id="history"  placeholder="Enter your past illness"><br>
            <label for="history">History of Past Illness<br>(Type N/A if not applicable)</label><br>

            <input type="text" name="health_problems" id="health_problems" placeholder="Enter your ongoing health problems"><br>
            <label for="health_problems">Ongoing Health Problems<br> (Type N/A if not applicable)</label><br>

            <input type="text" name="surgery" id="surgery" placeholder="Enter your previous/past surgery/operations"><br>
            <label for="surgery">Surgery/Operations<br> (Type N/A if not applicable)</label><br>

            <h4>Immunization<br>
                (Check all that apply)
            </h4>

            <div class="nav">
                <input type="hidden" >
                <input type="checkbox" name="imunization[]" id="bcg" value="BCG">
                <label for="bcg">BCG</label><br>

                <input type="checkbox" name="imunization[]" id="opv" value="OPV">
                <label for="opv">OPV</label><br>

                <input type="checkbox" name="imunization[]" id="dpt" value="DPT">
                <label for="dpt">DPT</label><br>

                <input type="checkbox" name="imunization[]" id="hepb" value="Hep B">
                <label for="hepb">Hep B</label><br>

                <input type="checkbox" name="imunization[]" id="measles" value="Measles">
                <label for="measles">Measles</label><br>


                <h5>Covid Vaccination <br>
                    (Check all that apply)
                </h5>


                <input type="checkbox" name="vaccine[]" id="1st" value="1st Dose">
                <label for="1st">1st Dose</label><br>

                <input type="checkbox" name="vaccine[]" id="2nd" value="2nd Dose">
                <label for="2nd">2nd Dose</label><br>

                <input type="checkbox" name="vaccine[]" id="booster1" value="1st Booster">
                <label for="booster1">1st Booster</label><br>

                <input type="checkbox" name="vaccine[]" id="booster2" value="2nd Booster">
                <label for="booster2">2nd Booster</label><br><br>

                <label for="others">Others:</label><br>
                <textarea name="vaccine[]" id="others" class="others" value=""></textarea><br><br>
            </div>
        </div>
        <div class="input-container">

            <span><input type="text" name="school_id" id="id" class="type" required><input type="text" name="dept" id="dept" class="type" required><input type="text" name="course" id="course" class="type" required></span><br>
            <label for="id" class="label">ID#</label>
            <label for="dept" class="dept">DEPT</label>
            <label for="course" class="course">COURSE/YR</label><br><br>

            <span><input type="text" name="age" id="age" class="type" required><input type="text" name="sex" id="sex" class="type" required><input type="text" name="civil_status" id="civil_status" class="type" required></span><br>
            <label for="age" class="label">AGE</label>
            <label for="sex" class="sex">SEX</label>
            <label for="civil_status" class="civil">CIVIL STATUS</label><br><br>

            <span><input type="text" name="religion" id="religion" class="type" required><input type="text" name="height" id="height" class="type" required><input type="text" name="weight" id="weight" class="type" required></span><br>
            <label for="religion" class="label">RELIGION</label>
            <label for="height" class="height">HEIGHT</label>
            <label for="weight" class="weight">WEIGHT</label><br><br><br><br><br><br>



            <input type="text" name="contactF" id="contactF" required><br>
            <label for="contactF">Father's Contact No.</label><br>

            <input type="text" name="contactM" id="contactM" required><br>
            <label for="contactM">Mother's Contact No.</label><br>

            <input type="text" name="contactS" id="contactS"><br>
            <label for="contactS">Spouse Contact No.</label><br>

            <input type="text" name="contactG" required><br>
            <label for="contactG">Guardian's Contact No.</label><br>

            <input type="text" name="contactP" id="contactP" required><br>
            <label for="contactP">Emergency's Contact No.</label><br>


            <h4>Allergies <br>
                (Check all that apply)
            </h4>
            <div class="input-field">
                <input type="checkbox" name="allergies[]" id="food" value="Food">
                <label for="food">Food</label><br>

                <input type="checkbox" name="allergies[]" id="drug" value="Drug">
                <label for="drug">Drug</label><br>

                <input type="checkbox" name="allergies[]" id="insect" value="Insect">
                <label for="insect">Insect Sting</label><br>

                <input type="checkbox" name="allergies[]" id="pollen" value="Pollen">
                <label for="pollen">Pollen</label><br>

                <input type="checkbox" name="allergies[]" id="seasonal" value="Seasonal">
                <label for="seasonal">Seasonal</label><br>

                <input type="checkbox" name="allergies[]" id="environment" value="Environment">
                <label for="environment">Environment</label><br>

                <input type="checkbox" name="allergies[]" id="allergies_others" value="Others">
                <label for="other_allergy">Others</label>
            </div>
            <div class="input">
                <h4>Family Medical History <br>
                    (Check all that apply) (P) Paternal (M) Maternal
                </h4>

                <div class="condition">
    <input type="checkbox" name="medical_history[]" id="asthma" value="Asthma"><label for="asthma">Asthma</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal1" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal1" value="maternal"><label for="maternal">M</label>
    </div>
</div>
<div class="condition">
    <input type="checkbox" name="medical_history[]" id="hyper" value="Hyper Tension"><label for="hyper">Hyper Tension</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal2" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal2" value="maternal"><label for="maternal">M</label>
    </div>
</div>
<div class="condition">
    <input type="checkbox" name="medical_history[]" id="diabetes" value="Diabetes"><label for="diabetes">Diabetes</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal3" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal3" value="maternal"><label for="maternal">M</label>
    </div>
</div>
<div class="condition">
    <input type="checkbox" name="medical_history[]" id="heart" value="Heart Problems"><label for="heart">Heart Problems</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal4" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal4" value="maternal"><label for="maternal">M</label>
    </div>
</div>
<div class="condition">
    <input type="checkbox" name="medical_history[]" id="kidney" value="Kidney Problems"><label for="kidney">Kidney Problems</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal5" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal5" value="maternal"><label for="maternal">M</label>
    </div>
</div>
<div class="condition">
    <input type="checkbox" name="medical_history[]" id="cancer" value="Cancer"><label for="cancer">Cancer</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal6" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal6" value="maternal"><label for="maternal">M</label>
    </div>
</div>

<div class="condition">
    <input type="checkbox" name="medical_history[]" id="tuberculosis" value="Tuberculosis"><label for="tuberculosis">Tuberculosis</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal7" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal7" value="maternal"><label for="maternal">M</label>
    </div>
</div>

<div class="condition">
    <input type="checkbox" name="medical_history[]" id="medical_others" value="Others"><label for="medical_others">Others</label>
    <div class="spacer"></div> <!-- Used for spacing -->
    <div class="paternal">
        <input type="checkbox" name="paternal[]" id="paternal8" value="paternal"><label for="paternal">P</label>
    </div>
    <div class="maternal">
        <input type="checkbox" name="maternal[]" id="maternal8" value="maternal"><label for="maternal">M</label>
    </div>
</div>

</div>
</div><br><br><br>
        <center><button type="submit" class="submit" style="color:white; font-size:20px;">SIGN UP</button><br>
</form><br>
        <a href="/">Already Signed Up? Click to Log In</a><br><br>
</div>
</body>
</html>