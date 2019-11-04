<?php
session_start();
require_once 'dao.php';
$email = $_POST['email'];
$password = $_POST['psw'];
$dao = new dao();
$conn = $dao->getConnection();

$valid = $dao->isValidUser($email, $password, $conn);


//if ($username == "test" && $password == "test") {
//  $valid = true;
//}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    session_destroy();
    header('Location: login.php');
    exit;
}


//$logger->LogDebug("Clearing the session array");
$_SESSION = array();

if ($valid) {
   $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
   //$logger->LogInfo("User login successful [{$username}]");
   header("Location: index.php");
   exit;
    
} else {
   //$logger->LogWarn("User login failed [{$username}]");
   $_SESSION['message'] = "Invalid username or password";
   header("Location: login.php");
   exit;
}