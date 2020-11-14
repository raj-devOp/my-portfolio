<?php
$servername = "mysql.cms.gre.ac.uk";
$username = "rg5319d";
$password = "rg5319d";
$dbname = "mdb_rg5319d";

// create connection
$conn = mysqli_connect($servername, $username, $password, "$dbname");

// checks the connection
if (!$conn) {
  die("Connection failed: " .mysql_error());
}

if(isset($_POST['save'])){
    $fname = $_POST['firstname']; 
    $lname = $_POST['lastname'];
    $identity = $_POST['category'];
    $feedback = $_POST['feedback'];
    

    // inseting data into database
    $sql = "INSERT INTO contactus (fname, lname, identity, feedback) VALUES ('$fname', '$lname', '$identity', '$feedback')";
    if (mysqli_query($conn, $sql)){
       echo "<div class= 'alert alert-success'>New record created successfully !</div>"; 
    } else {
        echo "Error: " . $sql . " 
        " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
