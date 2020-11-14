<!DOCTYPE html>
<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>

<title> Contact us page </title>
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
</style>
    
    <body>
    
   <div class="navbar">
  
  <a href="Index.php"><i><b>Sports Society App</b></i></a>
  <a href="Aboutus.html">About Us</a>
  <a href="Contactus.php">Contact Us</a>
<!--  <a href="Inplay.php">In-Play</a>-->
  <a href="Stats.php">Statistics</a>
       

    <div class="navbar-right">
     <a href="Registration.php">Register</a>
     <a href="Login.php">Login</a>
    </div>

</div>
<br>
<!--
        
        <div class="column">
  <div class="hero-text">
    <h1 style="font-size:50px">Welcome to our Sports App</h1>
    <h3>Please help yourself to navigate anywhere you want!</h3>
  </div>
</div>
-->

        
        <br><br><br>


<h1>Search Direction using Google Map</h1>
        
        <br><br>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>

<div class="footer">
<p>copyrights @ rg5319d@gre.ac.uk</p>
</div>

</html>