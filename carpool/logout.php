<?php
//initial session
session_start();

// delete certain session

unset($_SESSION['username']);
setcookie("username", "", time()-3600); //change to minus to get rid of cookie

// delete all session variables
// session_destroy();

//jump to login page
header('Location: login.html');

?>