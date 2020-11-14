<?php
ob_start();
//add above to php when it has redirect errors

session_start();
require 'cdb.php';

$uName = $_POST["username"];
$pWord = $_POST["password"];

if (isset($uName)&&isset($pWord)) {

$sql = "SELECT * FROM login WHERE username='$uName' AND password='$pWord'";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if ($data['active'] != 1) {
    if($count == 1){
        setcookie("username", $uName, time()+3600);
        $_SESSION["username"] = $uName;
            //terminate session for username to log out users
        echo "Login successful: " . $uName;
        header('Location: vpage.html');

    } else {
        echo "Invalid Username/Password";
    }
} else {
    header('Location: welcomepage.php');
}
}

mysqli_close($conn);

?>