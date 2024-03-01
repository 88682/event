<?php
session_start();
$_SESSION["liname"];

if (!isset($_SESSION["liname"])){
  header('Location:login.php');
}

$_SESSION["coname"];

if(isset($_POST['c_submit'])){
  $ccode = $_POST['c_code'];
  $ccode_enc = sha1($ccode);

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
  header('Location:../index.php?alert=serverfail');
  exit();
}
else {
  $data2 = "Connected successfully";
  echo("<script>console.log('PHP: " . $data2 . "');</script>");
}

$event_id = null;
$sql = "SELECT id FROM event_codes WHERE code='$ccode_enc'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
  $conn->close();
  header('Location:/eventcode.php?alert=codefail');
  exit();
}

while ($row = $result->fetch_assoc()) {
  $_SESSION["coname"] = $row["id"];
}

$conn->close();

header('Location:event.php');
exit();
} else {
header('Location:../index.php?alert=serverfail');
exit();
}
