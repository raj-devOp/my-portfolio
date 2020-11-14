<?php

session_start();
$username = "";
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect("mysql.cms.gre.ac.uk", "rg5319d", "rg5319d", "mdb_rg5319d"); 

//if the registered button is clicked
if (isset($_POST['register'])){
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);
        $password_repeat = mysqli_real_escape_string($db, $_POST['password_repeat']);



// ensure if the fields are filled properly or not
if (empty($firstname)){
    array_push($errors, "First Name is required");
}

if (empty($lastname)){
    array_push($errors, "Last Name is required");
}

if (empty($username)){
    array_push($errors, "Username is required");
}

if (empty($email)){
    array_push($errors, "Email address is required");
}

if (empty($password1)){
    array_push($errors, "Password is required");
}
    
if ($password1 != $password_repeat){
    array_push($errors, "Password must match");
}

// first check the database to make sure 
  // a user does not already exist with the same username 
  $sql = "SELECT * FROM register WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $sql);
  $username = mysqli_fetch_assoc($result);
  
  if ($username) { // if user exists
    if ($username['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }    
    
    //save to database without any errors
if (count($errors) == 0){
//    $hashed_password = password_hash($password1, PASSWORD_DEFAULT); 
    $password = md5($password1); //ecryption of password for security reason
    $query = "INSERT INTO register (firstname, lastname, username, email, password1) VALUES ('$firstname', '$lastname', '$username', '$email', '$password1')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are successfully logged in now";
    header('location: userhome.php'); // redirect to Home page once logged in successfully 
} }

// log user in from login page
if (isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    
    if (empty($username)){
    array_push($errors, "Username is required");
}
    
    if (empty($password1)){
    array_push($errors, "Password is required");
}
    
    if (count($errors) == 0){
//        $hashed_password = password_hash($password1, PASSWORD_DEFAULT); 
        $password = md5($password1); //again ecryption of password for security reason
        $query = "SELECT * FROM register WHERE username='$username' AND password1='$password1'";
        $result = mysqli_query($db, $query);
        
        if (mysqli_num_rows($result) > 0){
            // log user in
//            $username = mysqli_fetch_assoc($results);
//			if ($username['username'] == 'Admin') {
//
//				$_SESSION['username'] = $username;
//				$_SESSION['success']  = "You are successfully logged in";
//				header('location: browse-users.php');		  
//			}else{
             $_SESSION['username'] = $username;
             $_SESSION['success'] = "You are logged in now";
             header('location: userhome.php'); // redirect to Home page  
        }
        else{
            array_push($errors, "Invalid username/password");
                
        }
    }
}


// for logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: Index.php');
}
?>

<!--
///  Check connection
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  exit();
//}
-->

