<!DOCTYPE html>
<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">

<title> Statistics </title>
    </head>
    
    <style>
        
* {
  box-sizing: border-box;
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
  
  <a href="userhome.php"><i><b>Sports Society App</b></i></a>
  <a href="Aboutus.html">About Us</a>
  <a href="Contactus.php">Contact Us</a>
  <a href="Inplay.php">In-Play</a>
<!--
  <a href="Stats.php">Statistics</a>
       
-->

    <div class="navbar-right">
     <a href="userhome.php" class="previous">&laquo; Back</a>
    </div>   
</div>
<br><br><br><br>


        
<div id="example1">
<h2><center>Select an Option! </center></h2>
    <center> <b><a href="Stats.php">Team Statistic </a></b> | <b> <a href="PlayerStat.php">Player Statistics</a> </b></center>
</div>
        
<!--
 <h2>Search your Team</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Team.." title="Type in a name">

<ul id="myUL">
  <li><a href="#">UoG</a></li>
  <li><a href="#">QM</a></li>

  <li><a href="#">King's</a></li>
  <li><a href="#">Imperial</a></li>

  <li><a href="#">JKG</a></li>
  <li><a href="#">Centerbury</a></li>
  
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
        
-->

        <table class="table">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Team Name</th>
                    <th> Won </th>
                    <th> Lost </th>
                    <th> Position </th>
                </tr>
            </thead>
            
            <tbody>
            <?php
            
            $conn = mysqli_connect("mysql.cms.gre.ac.uk", "rg5319d", "rg5319d", "mdb_rg5319d");
            $result = mysqli_query($conn, "SELECT * FROM teamstats");
            
            while ($row = mysqli_fetch_assoc($result)):
            ?>
            
            <tr>
                <td><?php echo $row['ts_Id']; ?></td>
                <td><?php echo $row['Team_Name']; ?></td>
                <td><?php echo $row['Won']; ?></td>
                <td><?php echo $row['Lost']; ?></td>
                <td><?php echo $row['Position']; ?></td>
            </tr>
            
            <?php endwhile; ?>
            </tbody>
        </table>
        
        
        
        <script src="table/js/jquery.js"></script>
        <script src="table/js/jquery.dataTables.js"></script>
        <script src="table/js/dataTables.bootstrap.js"></script>
        
        <script>
            $(".table").DataTable();
        </script>
    
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