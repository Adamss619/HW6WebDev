<?php
session_start();
require_once 'dao.php';
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['psw'];
$password2 = $_POST['psw2'];

$dao = new dao();
$conn = $dao->getConnection();
if($_POST['psw'] == $_POST['psw2']){
    $user = $dao->checkUsername($username, $conn);
    if($user){
        $valid = $dao->registerUser($username,$email, $password, $conn);
    }else{
    $_SESSION['userError'] = "Username is taken!";
    $_SESSION['email'] = $email;
    $_SESSION['uname'] = $username;
    $_SESSION['psw'] = $password;
    $_SESSION['psw2'] = $password2;
    header("Location: signup.php");
    exit;
    }
}else{
    $_SESSION['pass'] = "Passwords do not match!";
    $_SESSION['email'] = $email;
    $_SESSION['uname'] = $username;
    $_SESSION['psw'] = $password;
    $_SESSION['psw2'] = $password2;
    header("Location: signup.php");
    exit;
}



//if ($username == "test" && $password == "test") {
//  $valid = true;
//}

//$logger->LogDebug("Clearing the session array");
$_SESSION = array();

if ($valid) {
   $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['uname'] = $username;
   //$logger->LogInfo("User login successful [{$username}]");
   header("Location: index.php");
   exit;
    
} else {
   //$logger->LogWarn("User login failed [{$username}]");
    $_SESSION['emailError'] = "Email is taken!";
    $_SESSION['uname'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['psw'] = $password;
    $_SESSION['psw2'] = $password2;
   header("Location: signup.php");
   exit;
}