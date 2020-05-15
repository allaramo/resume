<?php
ob_start();
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
ob_end_flush();
?>