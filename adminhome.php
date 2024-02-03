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
    <div class="container my-5">
<h2>Clients</h2>
<a class="btn btn-primary" href="\adonis\create.php" role="button">New Client</a>
<br>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Emri</th>
        <th>Gmail</th>
        <th>Number</th>
        <th>State</th>
        <th>Date</th>
    </tr>
</thead>

    <tbody>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="user";

        $connection = new mysqli($servername,$username,$password,$db);

        if($connection->connect_error)
        {
      die("connection error");
        }
        $sql = "SELECT * FROM clients";
        $result = $connection->query($sql);

        if(!$result)
        {
      die("connection error");
        }

        while($row = $result->fetch_assoc()){
            echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[address]</td>
            <td>$row[created_at]</td>
            <td>
                <a  class='btn' href='/mypage/edit.php?id=$row[id]'>Edit</a>
                <a  class='btn'  href='/mypage/delete.php?id=$row[id]'>Delete</a>
            </td>
        </tr>

            
            ";
        }
        

        ?>

    </tbody>


</table>



</div>




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