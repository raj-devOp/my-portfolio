

<?php
// database connection
$SERVER = "mysql.cms.gre.ac.uk";
$USER = "rg5319d";
$PASSWORD = "rg5319d";
$DATABASE = "mdb_rg5319d";

$conn = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

/* check connection */
if (mysqli_connect_errno()) {
    echo "<h3>Sorry there is a problem. Please try again later.</h3>";
    exit();
} 
else {
echo "connection successful";
}

?>