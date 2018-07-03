

<?php
/* File for handling logout of current running session(s) */
session_start();
 

$_SESSION = array();
 

session_destroy();


header("location: login.php");
exit;
?>