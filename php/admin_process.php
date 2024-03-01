<?php
session_start();
$_SESSION["adname"];

if(isset($_POST['l_submit'])){
  $lname = htmlspecialchars($_POST['l_name']);
  $lpass = htmlspecialchars($_POST['l_pass']);
  $lpass_enc = sha1($lpass);

$servername = "localhost";
$username = "89133";
$password = "#1Geheim!";
$dbname = "db89133";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  $data1 = "Did not connect";
  echo("<script>console.log('PHP: " . $data1 . "');</script>");
}
else {
  $data2 = "Connected successfully";
  echo("<script>console.log('PHP: " . $data2 . "');</script>");
}

$sql = "SELECT admin_name, admin_pass FROM event_admins WHERE admin_name='$lname' AND admin_pass='$lpass_enc'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
  $conn->close();
  header('Location:../index.php?alert=loginfail');
  exit();
}

$_SESSION["adname"] = $lname;


$conn->close();

header('Location:admin.php');
exit();
} else {
  header('Location:../index.php?alert=servererror');
  exit();
}