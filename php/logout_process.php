<?php
session_start();
$_SESSION["liname"];
  // remove all session variables
session_unset();

// destroy the session
session_destroy();

$_SESSION["liname"] = null;
$_SESSION["adname"] = null;

header('Location:../index.php');
?>