<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}

	else
	{
		echo "username or password incorrect";
	}

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
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="img/jeep.png" alt=""></a>

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
       
    </header>
<br>
<br>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
            <p id="error-message" class="error-message"></p>
            <div class="login-hint">
                To log in as admin <a href="Adminlogin.html">click here</a>.
            </div>
        </div>
 
    </body>
    </html>




<script src="https://unpkg.com/scrollreveal"></script>

    
    <script src="vali.js"></script>
</body>




