<?php
ob_start();
session_start(); //starts the session
require 'cdb.php'; 

// $cdb = mysqli_connect('mysql.cms.gre.ac.uk', 'rg5319d', 'rg5319d', 'mdb_rg5319d');
// get input from the form pages and sends it to database
if (isset($_POST["Signup"])) {
$username = $_POST['username'];
$password = $_POST['password'];
$cPassword = $_POST['confirmed_password'];
$email = $_POST['email'];
$code = mt_rand(10000, 99999);

$sql = "INSERT INTO login (username, password, email, code) VALUES ('$username', '$password', '$email', $code)";

$userCheck = "SELECT * FROM login WHERE username = '$username'";
$result = mysqli_query($conn, $userCheck);
$count = mysqli_num_rows($result);

require 'capCheck.php';

if ($count >= 1) {
    echo "Error, username already in use";
} else if ($password == $cPassword) { //checks whether the password matches
    
    if ($cpr == 1) {
    unset($_SESSION["cp"]);
        if (mysqli_query($conn, $sql)) {
            $to = $email;
            $subject = "Confirmation code for login";
            $header = "From Raj";
            $message = "Your code is: " . $code;
            mail($to, $subject, $message, "From: rg5319d@greenwich.ac.uk\r\n");
            header('Location: login.html');
        } else {
            echo "Something went wrong" . " " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Captcha is wrong please refresh the page ";
        unset($_SESSION["cp"]);
    } 
} else {
    echo "Something went wrong check captcha or password";
    unset($_SESSION["cp"]);
}
}



if (isset($_POST['postage'])) {
// receive all input values from the welcome page form
	
	$destinations = $_POST['destinations'];
	$destinatione = $_POST['destinatione'];
    $time = $_POST['time'];
    $date = $_POST['date'];
	$lift = $_POST['lift'];
    $cars = $_POST['cars'];
    $licence = $_POST['licence'];
    $insurance = $_POST['insurance'];
    $costs = $_POST['costs'];

    
        	$query = "INSERT INTO destination (destinations, destinatione, time, date, lift, cars, licence, insurance, costs) 
				  VALUES('$destinations', '$destinatione', '$time', $date, '$lift', '$cars', '$licence', '$insurance' ,$costs)"; 
	if(mysqli_query($conn, $query)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not execute query: $query. " . mysqli_error($conn);
        }	
    //mysqli_query($conn, $query);
        
}
              

mysqli_close($conn);

?>