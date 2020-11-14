<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="Style.css">
<title> Home  </title>
    </head>
    
    <body>
         <div class="navbar">
  
  <a href="Index.html"><i><b>Sports Society App</b></i></a>
  <a href="Aboutus.html">About Us</a>
  <a href="Contactus.php">Feedback</a>
  <a href="Inplay.php">In-Play</a>
  <a href="Stats.php">Statistics</a>

<div class="navbar-right">
    
 <input type="submit" id="logout_btn" value="Log Out" /> 
</div>

</div>
        
  <br><br>
        
        <div class="alert alert-success">
        <?= $_SESSION['message'] ?>
        </div>
        
<!--
     <span class="user"><img src='<?= $_SESSION['avatar'] ?>' </span>
         
-->
         Welcome <span class="user"><?= $_SESSION['username'] ?> </span> 
        
<!--
        <form class="myform" action="home.php" method="post">
        
        </form>
-->
<!--
    <div>
        Welcome
        <?php echo $_SESSION['username']; 
        ?>
        </div>  
        
-->
      <p>
      mate ! edit me please
        </p> 
        
        
  <br><br>
<div class="footer">
<p>copyrights @ rg5319d@gre.ac.uk</p>
</div>
      
        
    </body>
    
</html>
