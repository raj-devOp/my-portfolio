<?php 
session_start();
include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Style.css">
<title> Home </title>
    </head>

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

.grid-container {
  display: grid;
  height: 400px;
  align-content: center;
  grid-template-columns: auto auto ;
  grid-gap: 10px;
  background-color: grey;
  padding: 0;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.9);
  text-align: center;
    height: auto;
  padding: 60px 0;
  font-size: 30px;
}

    </style>
    <body>
    
   <div class="navbar">
  
  <a href="userhome.php"><i><b>Sports Society App</b></i></a>
  <a href="Aboutus.html">About Us</a>
  <a href="Contactus.php">Feedback</a>
  <a href="Inplay.php">In-Play</a>
  <a href="Stats.php">Statistics</a>

<div class="navbar-right">
 <a href="Index.php?logout='1'"  style="color: red;"> Logout</a>
</div>
</div>
<br><br><br><br><br><br>
        
<div class="content1">
<?php if (isset($_SESSION['success'])): ?>  
    
<div class="error success">
<h3>
<?php echo $_SESSION['success'];
      unset($_SESSION['success']);
?>
</h3>    
</div>
    
<?php endif ?>

<?php if (isset($_SESSION["username"])): ?>    
    <p>Welcome to Home Page<strong> <?php echo $_SESSION['username']; ?> </strong></p>  
    <p> </p>
    <?php endif ?>
</div>    
        
<br><br>
        
<div class="row">
<div class="grid-container">
<div><p>To access Sports related Journals/Articles 
      <a href="#">Sports Book</a> </p></div>
        
  <div><p>Required Training? click here 
      <a href="calendar.php">Book Training</a></p></div>
        
  <div><p>Want to Access Profile? click here 
      <a href="browse-users.php">Access Profile</a></p></div>
        
  <div><p>Generate Location? click here 
      <a href="Location.php">Direction </a></p></div> 
</div>
</div>
        
    </body>
<!--
    
<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header('location:Index.php');
    }  
        ?>
-->
    
    
<br><br><br>
<div class="footer">
<a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.snapchat.com/l/en-gb/" class="fa fa-snapchat-ghost"></a> 
<a>copyrights @ rg5319d@gre.ac.uk</a>   
</div>

</html>