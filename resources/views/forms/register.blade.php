<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="login_css/register.css">
</head>
<body>

<div class="navbar">
    <image src="https://i.ibb.co/ggN6S8v/image-2.png" class="img"></image>
</div>

<div class="container">
    <h3 style="text-align:center;">Medical/Dental<br>
        INDIVIDUAL HEALTH RECORD</h3><br><br>
        <form action="{{ route('register') }}" method="POST">

        @csrf

        <div class="input-field">
            <input type="text" name="name" required><br>
            <label for="name">Name</label><br>

            <input type="password" name="password" required><br>
            <label for="password">Password</label><br>

            <input type="email" name="email" required><br>
            <label for="email">Email</label><br>

            <input type="date" name="bdate" required><br>
            <label for="bdate">Birthdate</label><br>

            <input type="tel" name="contact" required><br>
            <label for="contact">Contact No.</label><br>

            <input type="text" name="caddress" required><br>
            <label for="caddress">City Address</label><br>

            <input type="text" name="haddress" required><br>
            <label for="haddress">Home Address</label><br>

            <input type="text" name="fname" required><br>
            <label for="fname">Father's Name</label><br>

            <input type="text" name="mname" required><br>
            <label for="mname">Mother's Name</label><br>

            <input type="text" name="sname"><br>
            <label for="sname">Spouse Name (if married)</label><br>

            <input type="text" name="guardian" required><br>
            <label for="guardian">Guardian</label><br>

            <input type="text" name="emergency" required><br>
            <label for="emergency">Person To Notify In Case of Emergency</label><br>

            <input type="text" name="history" required><br>
            <label for="history">History of Past Illness</label><br>

            <input type="text" name="health_problems" required><br>
            <label for="health">Ongoing Health Problems</label><br>

            <input type="text" name="surgery" required><br>
            <label for="surgery">Surgery/Operations</label><br>

            <h4>Immunization<br>
                (Check all that apply)
            </h4>

            <div class="nav">
                <input type="checkbox" name="bcg">
                <label for="bcg">BCG</label><br>

                <input type="checkbox" name="opv">
                <label for="opv">OPV</label><br>

                <input type="checkbox" name="dpt">
                <label for="dpt">DPT</label><br>

                <input type="checkbox" name="hepb">
                <label for="hepb">Hep B</label><br>

                <input type="checkbox" name="measles">
                <label for="measles">Measles</label><br>


                <h5>Covid Vaccination <br>
                    (Check all that apply)
                </h5>


                <input type="checkbox" name="1st">
                <label for="1st">1st Dose</label><br>

                <input type="checkbox" name="2nd">
                <label for="2nd">2nd Dose</label><br>

                <input type="checkbox" name="booster1">
                <label for="booster1">1st Booster</label><br>

                <input type="checkbox" name="booster2">
                <label for="booster2">2nd Booster</label><br><br>

                <label for="others">Others:</label><br>
                <textarea name="others" class="others"></textarea><br><br>
            </div>
        </div>
        <div class="input-container">

            <span><input type="text" name="id" class="type" required><input type="text" name="dept" class="type" required><input type="text" name="course" class="type" required></span><br>
            <label for="id" class="label">ID#</label>
            <label for="dept" class="dept">DEPT</label>
            <label for="course" class="course">COURSE/YR</label><br><br>

            <span><input type="text" name="age" class="type" required><input type="text" name="sex" class="type" required><input type="text" name="civil_status" class="type" required></span><br>
            <label for="age" class="label">AGE</label>
            <label for="sex" class="sex">SEX</label>
            <label for="civil_status" class="civil">CIVIL STATUS</label><br><br>

            <span><input type="text" name="religion" class="type" required><input type="text" name="height" class="type" required><input type="text" name="weight" class="type" required></span><br>
            <label for="religion" class="label">RELIGION</label>
            <label for="height" class="height">HEIGHT</label>
            <label for="weight" class="weight">WEIGHT</label><br><br><br><br><br><br>



            <input type="text" name="contactF" required><br>
            <label for="contactF">Father's Contact No.</label><br>

            <input type="text" name="contactM" required><br>
            <label for="contactM">Mother's Contact No.</label><br>

            <input type="text" name="contactS"><br>
            <label for="contactS">Spouse Contact No.</label><br>

            <input type="text" name="conactG" required><br>
            <label for="contactG">Guardian's Contact No.</label><br>

            <input type="text" name="contactP" required><br>
            <label for="contactP">Emergency's Contact No.</label><br>


            <h4>Allergies <br>
                (Check all that apply)
            </h4>
            <div class="input-field">
                <input type="checkbox" name="food">
                <label for="food">Food</label><br>

                <input type="checkbox" name="drug">
                <label for="drug">Drug</label><br>

                <input type="checkbox" name="insect">
                <label for="insect">Insect Sting</label><br>

                <input type="checkbox" name="pollen">
                <label for="pollen">Pollen</label><br>

                <input type="checkbox" name="seasonal">
                <label for="seasonal">Seasonal</label><br>

                <input type="checkbox" name="environment">
                <label for="environment">Environment</label><br>

                <input type="checkbox" name="others">
                <label for="others">Others</label>
            </div>
            <div class="input">
                <h4>Family Medical History <br>
                    (Check all that apply) (P) Paternal (M) Maternal
                </h4>

                <div class="condition">
                    <input type="checkbox" name="asthma"><label for="asthma">Asthma</label>
                    <div class="spacer"></div> <!-- Used for spacing -->
                    <div class="paternal">
                        <input type="checkbox" name="paternal1"><label for="paternal1">P</label>
                    </div>
                    <div class="maternal">
                        <input type="checkbox" name="maternal1"><label for="maternal1">M</label>
                    </div>
                </div>
                <div class="condition">
                    <input type="checkbox" name="hyper"><label for="hyper">Hyper Tension</label>
                <div class="spacer"></div> <!-- Used for spacing -->
                <div class="paternal">
                        <input type="checkbox" name="paternal2"><label for="paternal2">P</label>
                </div>
                <div class="maternal">
                        <input type="checkbox" name="maternal2"><label for="maternal2">M</label>
                </div>
                </div>
                <div class="condition">
                        <input type="checkbox" name="diabetes"><label for="diabetes">Diabetes</label>
                <div class="spacer"></div> <!-- Used for spacing -->
                    <div class="paternal">
                            <input type="checkbox" name="paternal3"><label for="paternal3">P</label>
                    </div>
                    <div class="maternal">
                            <input type="checkbox" name="maternal3"><label for="maternal3">M</label>
                    </div>
                    </div>

                    <div class="condition">
                        <input type="checkbox" name="heart"><label for="heart">Heart Problems</label>
                    <div class="spacer"></div> <!-- Used for spacing -->
                     <div class="paternal">
                        <input type="checkbox" name="paternal4"><label for="paternal4">P</label>
                    </div>
                    <div class="maternal">
                        <input type="checkbox" name="maternal4"><label for="maternal4">M</label>
                    </div>
                    </div>

                    <div class="condition">
                        <input type="checkbox" name="kidney"><label for="kidney">Kidney Problems</label>
                    <div class="spacer"></div> <!-- Used for spacing -->
                    <div class="paternal">
                            <input type="checkbox" name="paternal5"><label for="paternal5">P</label>
                    </div>
                    <div class="maternal">
                            <input type="checkbox" name="maternal5"><label for="maternal5">M</label>
                    </div>
                    </div>

                    <div class="condition">
                        <input type="checkbox" name="cancer"><label for="cancer">Cancer</label>
                        <div class="spacer"></div> <!-- Used for spacing -->
                        <div class="paternal">
                            <input type="checkbox" name="paternal6"><label for="paternal6">P</label>
                        </div>
                        <div class="maternal">
                            <input type="checkbox" name="maternal6"><label for="maternal6">M</label>
                        </div>
                    </div>
                    
                    <div class="condition">
                        <input type="checkbox" name="tuberculosis"><label for="tuberculosis">Tuberculosis</label>
                        <div class="spacer"></div> <!-- Used for spacing -->
                        <div class="paternal">
                            <input type="checkbox" name="paternal7"><label for="paternal7">P</label>
                        </div>
                        <div class="maternal">
                            <input type="checkbox" name="maternal7"><label for="maternal7">M</label>
                        </div>
                    </div>

                    <div class="condition">
                        <input type="checkbox" name="others"><label for="others">Others</label>
                        <div class="spacer"></div> <!-- Used for spacing -->
                        <div class="paternal">
                            <input type="checkbox" name="paternal8"><label for="paternal8">P</label>
                        </div>
                        <div class="maternal">
                            <input type="checkbox" name="maternal8"><label for="maternal8">M</label>
                        </div>
                        </div>

        </div><br><br><br>
        <center><button type="submit" class="submit" style="color:white; font-size:20px;">SIGN UP</button><br>
    </form><br>
    <a href="/login">Already Signed Up? Click to Log In</a><br><br>
</div>
</body>
</html>
