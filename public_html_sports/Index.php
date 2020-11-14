<!DOCTYPE html>
<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">

<title> Home </title>
    </head>
    
    <style>
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
<!--  <a href="Aboutus.html">About Us</a>-->
  <a href="Contactus.php">Feedback</a>

       

<div class="navbar-right">
 <a href="Registration.php">Register</a>
 <a href="Login.php">Login</a>
</div>
</div>
<br><br><br><br>
<!--
<div class="row">

<div class="column" style="background-color:#ccc;">
    <h2>UoG Sports Society App</h2>
    
    <p>Please Login to access your profile by clicking on <a href="Login.php"> Login </a> 
    </p>
  </div>
  </div>
-->
        <script>
        function myFunction() {
  alert("Please Login to get access! or Sign up for registration!");
}
        </script>
<br>
<div class="row">

    
    <div class="grid-container">
  <div><p>To access Sports related Journals/Articles 
      <button onclick="myFunction()">Sports Book</button> </p></div>
        
  <div><p>Required Training? click here 
      <button onclick="myFunction()">Book Training</button></p></div>
        
  <div><p>Want to Access Profile? click here 
      <button onclick="myFunction()">Access Profile</button></p></div>
        
  <div><p>Generate Location? click here 
      <a href="Location.php">Direction </a></p></div> 
        
</div>

<!--    <p>Click below for topics !</a></p>-->

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