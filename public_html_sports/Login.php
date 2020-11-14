<?php 
//session_start();
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.fa {
  padding: 10px;
  font-size: 10px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
</style>
    <title> Login Form</title>
    
   <link rel="stylesheet" href="Style.css"> 
</head>

        <div class="navbar">

      <a href="Index.php"><i><b>Sports Society App</b></i></a>
      <a href="Aboutus.html">About Us</a>
      <a href="Contactus.php">Contact Us</a>
<!--
      <a href="Inplay.php">In-Play</a>
      <a href="Stats.php">Statistics</a>
-->

    <div class="navbar-right">
     <a href="Registration.php">Register</a>

    </div>

    </div>
   <br>
<br><br>
    
<body>
 
 
<h2>Login Form</h2>

<form method="POST" action="Login.php">
<!--
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
-->
<!--  displays validation errors -->
    <?php
    include('errors.php');
    ?>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1">
        
    <button type="submit" name="login" class="loginbtn"> Login </button>
    <!--<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
-->  </div>

   <div class="containerr" style="background-color:#f1f1f1">

    <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

</form>

     
</body>
<div class="footer">
<a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.snapchat.com/l/en-gb/" class="fa fa-snapchat-ghost"></a> 
<a>copyrights @ rg5319d@gre.ac.uk</a>   
</div>

</html>