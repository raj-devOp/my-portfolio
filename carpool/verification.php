<?php
ob_start();
// start session
session_start();
require 'cdb.php';

$uName = $_SESSION["username"]; //check the user and ask to input the verification code

$sql = "SELECT * FROM login WHERE username='$uName'";
$sql2 = "UPDATE login SET active = 1 WHERE username = '$uName'";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);


    if($_POST["code"] == $data['code']){ 
        mysqli_query($conn, $sql2);
        //terminate session for username to log out users
        header('Location: welcomepage.php');
        
        } else {
            echo "Invalid code";
        }
mysqli_close($conn);

?>


