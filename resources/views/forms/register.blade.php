<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="login_css/register.css">
</head>
<body>

<div class="navbar">
        <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>
</div>

<div class="container">
    <h3 style="text-align:center;">Medical/Dental<br>
    INDIVIDUAL HEALTH RECORD</h3><br><br>
    <form action="/sucessful">

<div class="input-field">
    <input type="text" id="name"><br>
    <label for="name">Name</label><br>
    
    <input type="password" id="password"><br>
    <label for="password">Password</label><br>
    
    <input type="text" id="email"><br>
    <label for="email">Email</label><br>
    
    <input type="date" id="bdate"><br>
    <label for="bdate">Birthdate</label><br>
    
    <input type="text" id="contact"><br>
    <label for="contact">Contact No.</label><br>
    
    <input type="text" id="caddress"><br>
    <label for="caddress">City Address</label><br>
    
    <input type="text" id="haddress"><br>
    <label for="hadress">Home Address</label><br>
    
    <input type="text" id="fname"><br>
    <label for=""fname>Father's Name</label><br>
    
    <input type="text" id="mname"><br>
    <label for="mname">Mother's Name</label><br>
    
    <input type="text" id="sname"><br>
    <label for="sname">Spouse Name (if married)</label><br>
    
    <input type="text" id="guardian"><br>
    <label for="guardian">Guardian</label><br>
    
    <input type="text" id="emergency"><br>
    <label for="emergency">Person To Notify In Case of Emergency</label><br>
    
    <input type="text" id="history"><br>
    <label for="history">History of Past Illness</label><br>
    
    <input type="text" id="health"><br>
    <label for="health">Ongoing Health Problems</label><br>

    <input type="text" id="surgery"><br>
    <label for="surgery">Surgery/Operations</label><br>
    
    <h4>Immunization<br>
        (Check all that apply)
    </h4>

    <div class="nav">
    <input type="checkbox" id="bcg">
    <label for="bcg">BCG</label><br>

    <input type="checkbox" id="opv">
    <label for="opv">OPV</label><br>

    <input type="checkbox" id="dpt">
    <label for="dpt">DPT</label><br>

    <input type="checkbox" id="hepb">
    <label for="hepb">Hep B</label><br>

    <input type="checkbox" id="measles">
    <label for="measles">Measles</label><br>
    

 
        <h5>Covid Vaccination <br>
             (Check all that apply) 
        </h5>
    

    
        <input type="checkbox" id="1st">
        <label for="1st">1st Dose</label><br>

        <input type="checkbox" id="2nd">
        <label for="2nd">2nd Dose</label><br>

        <input type="checkbox" id="booster1">
        <label for="booster1">1st Booster</label><br>

        <input type="checkbox" id="booster2">
        <label for="booster2">2nd Booster</label><br><br>

    <label for="others">Others:</label><br>
    <input type="text" id="others"><br><br>
    </div>
    </div>
    <div class="input-container">
    <span><input type="text" id="id" style="width:45px;">&nbsp;&nbsp;<input type="text" id="id" style="width:45px;">&nbsp;&nbsp;<input type="text" id="id" style="width:45px;"><br><label for="id">ID#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="id">DEPT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label for="id">COURSE/YR<br>
        
<br>
<span><input type="text" id="id" style="width:45px;">&nbsp;&nbsp;<input type="text" id="id" style="width:45px;">&nbsp;&nbsp;<input type="text" id="id" style="width:45px;"><br><label for="id">AGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="id">SEX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label for="id">CIVIL STATUS<br>
       
    
<br>
<span><input type="text" id="id" style="width:45px;">&nbsp;&nbsp;<input type="text" id="id" style="width:45px;">&nbsp;&nbsp;<input type="text" id="id" style="width:45px;"><br><label for="id">HEIGHT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="id">WEIGHT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label for="id">RELIGION<br><br><br><br><br><br>
    
        <input type="text" id="contactF"><br>
        <label for="contactF">Contact No.</label><br>

        <input type="text" id="contactM"><br>
        <label for="contactM">Contact No.</label><br>

        <input type="text" id="contactS"><br>
        <label for="contactS">COntact No.</label><br>

        <input type="text" id="conactG"><br>
        <label for="contactG">Contact No.</label><br>

        <input type="text" id="contactP"><br>
        <label for="contactP">Conatact No.</label><br>
    
    
        <h4>Allergies <br>
            (Check all that apply)
        </h4>
        <div class="input-field">
        <input type="checkbox" id="food">
        <label for="food">Food</label><br>

        <input type="checkbox" id="drug">
        <label for="drug">Drug</label><br>

        <input type="checkbox" id="insect">
        <label for="insect">Insect Sting</label><br>

        <input type="checkbox" id="pollen">
        <label for="pollen">Pollen</label><br>

        <input type="checkbox" id="seasonal">
        <label for="seasonal">Seasonal</label><br>

        <input type="checkbox" id="environment">
        <label for="environment">Environment</label><br>

        <input type="checkbox" id="others">
        <label for="others">Others</label>
</div>
<div class="input">
    <h4>Family Medical History <br>
        (Check all that apply) (P) Paternal (M) Maternal
    </h4>
    
    <div class="condition">
        <input type="checkbox" id="asthma1"><label for="asthma1">Asthma</label>
        <div class="spacer"></div> <!-- Used for spacing -->
        <div class="paternal">
            <input type="checkbox" id="paternal1"><label for="paternal1">P</label>
        </div>
        <div class="maternal">
            <input type="checkbox" id="maternal1"><label for="maternal1">M</label>
        </div>
    </div>
    <div class="condition">
        <input type="checkbox" id="asthma2"><label for="asthma2">Asthma</label>
        <div class="spacer"></div> <!-- Used for spacing -->
        <div class="paternal">
            <input type="checkbox" id="paternal2"><label for="paternal2">P</label>
        </div>
        <div class="maternal">
            <input type="checkbox" id="maternal2"><label for="maternal2">M</label>
        </div>
    </div>

    <!-- Add more conditions as needed -->
    
</div>
</div><br><br><br><br><br>
    <center><button type="submit" class="submit"style="color:white; font-size:20px;">SIGN UP</button><br>
    </form><br>
    <a href="/login">Already Signed Up? Click to Log In</a><br><br>
    </div>
</body>
</html>