<?php
include('fdconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title> Contact us page </title>
</head>
    
    <style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.cont {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.col {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


.error {color: #FF0000;}

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
   
    <body>
    
   <div class="navbar">
  
  <a href="Index.php"><i><b>Sports Society App</b></i></a>
  <a href="Aboutus.html">About Us</a>
  <a href="Contactus.php">Feedback</a>
<!--  <a href="Inplay.php">In-Play</a>-->
<!--  <a href="Stats.php">Statistics</a>-->
       

    <div class="navbar-right">
     <a href="userhome.php" class="previous">&laquo; Back</a>
    </div>

</div>
<br>
        

 <div class="cont">
  <div style="text-align:center">
    <h2>Feedback Us</h2>
    <p>Swing by for a quick survey in left, or leave us a Feedback in right:</p>
  </div>
  <div class="row">
    <div class="col">
     <center> <img src="feedback.jpg" alt="try again" style="width:80%"></center>
      
      <a href="https://www.surveymonkey.co.uk/r/DWZ25JR"> <b><center><button>Survey</button></center></b> </a>
    </div>
    <div class="col">
      <form method="POST" action="Contactus.php">
        <label for="fname">First Name</label>
        <input required type="text" id="fname" name="firstname" placeholder="Your first name..">
        <label for="lname">Last Name</label>
        <input required type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="identity">I Am</label>
        <select required id="category" name="category">
          <option value="student">Student</option>
          <option value="alumni">Alumni</option>
          <option value="nonstudent">Non-Student</option>
        </select>
        <label for="feedback">Feedback</label>
        <textarea required id="subject" name="feedback" placeholder="Tell us what you think .." style="height:170px"></textarea>
        <input type="submit" name="save" value="Submit">
      </form>
    </div>
  </div>
</div>
 
        
        
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