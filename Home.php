<?php
session_start();


if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Website</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="#" class="logo"><img src="rent logo.webp" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="./Home.html">Home</a></li>
            <li><a href="./Services.html">Services</a></li>
            <li><a href="./news.html">News</a></li>
            <li><a href="./Aboutus.html">About</a></li>
            <li><a href="./Contactus.html">Contact Us</a></li>
            <li><a href="./Login.html">Log in</a></li>
            <li><a href="./Signup.html">Sign up</a></li>
        </ul>
    
        </div>
    </header>
    <br/>
    <br/>
    <br/>
    <br/>
    <!-- Home -->
    <center>
    <section  id="home">
        <div class="text">
        </div class="adi">
            <h1><span>Kerkoni</span> per <br>rent a car</h1>
            <p>Per nje transport me te sigurt <br> duke perdorur makinat tona.</p>
            <div class="app-stores">
                <img src="range rover.webp" alt="">
                <img src="img/1000x1000.png" alt="">
            </div>
            </div>
        </div>
    </center>

    <div class="copyright">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>
    </div>

<script src="https://unpkg.com/scrollreveal"></script>

    <script src="main.js"></script>
</body>
</html>