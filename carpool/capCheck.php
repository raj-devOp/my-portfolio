<?php 
//session_start();
if ($_POST["number"] != $_SESSION["capT"] OR $_SESSION["capT"]=='')  { // displays some random numbers whenever it has been refreshed
    echo  '<strong>Incorrect verification code. Please Refresh the page.</strong>';
    echo "<script type='text/javascript'>alert('Incorrect verification code. Please Refresh page.');</script>";
    unset($_SESSION['cp']);
    
} else { 
    #echo  '<strong>Verification successful.</strong>';
    $cpr == 1;
    
}; 
?>