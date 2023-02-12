<?php
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
//Reload login page
header('location: login.php');
?>
