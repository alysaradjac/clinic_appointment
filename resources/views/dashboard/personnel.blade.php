<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<title>Dashboard</title>
</head>


<style>
  .icon-bar {
    width: 100%;
    overflow: auto;
  }

  .icon-bar a {
    float: left;
    width: 15;
    text-align: center;
    padding: 12px 0;
    transition: all 0.2s ease;
    color: black;
    font-size: 15px;
    margin-left: 200px;
  }

  .icon-bar a:hover {
    background-color: green;
  }

  .active {
    background-color: #04AA6D;

  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  .container>div {
    margin: 10px;
    text-align: center;
  }

  .container img {
    display: block;
    margin-bottom: 10px;
  }
</style>
</head>

<body>

  <div class="container">
    <div class="icon-bar">
      <a href="/dashboard"><i class="fa fa-home">Home</i></a>
      <a href="/personnel"><i class="fa fa-search">Personnel</i></a>
      <a href="#"><i class="fa fa-envelope">Appointment</i></a>
      <a href="#"><i class="fa fa-envelope">Profile</i></a>
    </div>
    <div class="">
      <image src="https://i.ibb.co/ggN6S8v/image-2.png"></image>

      <form action="/">
        <button type="submit">Sign Out</button>
      </form>

      <div class="container">
        <div>
          <img src="https://i.ibb.co/gtBc8LZ/drpunongbayan.jpg"><br>
          <p style="font-size:px; margin-right:200px;">Dr. Restituto G. Punongbayan</p>
          <p style=" margin-right: 220px;">School Doctor</p>
        </div>



        <div>
          <img src="https://i.ibb.co/3mwnDfk/drtianco.png" style="margin-left:70px;"><br>
          <p style="font-size:px; margin-right:40px;">Dr. Giuseppe Martin Michael S. Tianco, D.M.D.</p>
          <p>School Dentist</p>
        </div>
      </div><br>

      <div>
        <img src="https://i.ibb.co/xYdwpHK/michelle.png" style="margin-left:270px;"><br>
        <p style="margin-left:270px;">Dr. Restituto G. Punongbayan</p>
        <p style="margin-left:529px;">School Nurse</p>
      </div>
</body>

</html>