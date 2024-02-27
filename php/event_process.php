<?php

if(isset($_POST['e_submit'])){
  $ename = $_POST['e_name'];
  $epass = $_POST['e_pass'];
  $epass_enc = sha1($epass);

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

$sql = "INSERT INTO event_codes (code, event_name)
VALUES ('$epass_enc', '$ename')";

if ($conn->query($sql) === TRUE) {
  $data3 = "New record created successfully";
  echo("<script>console.log('PHP: " . $data3 . "');</script>");
} else {
  $data4 = "Could not create the record.";
  echo("<script>console.log('PHP: " . $data4 . "');</script>");
  header('Location:../index.php?alert=serverfail');
  exit();
}
$conn->close();

header('Location:../index.php?alert=event');
exit();
} else {
header('Location:../index.php?alert=serverfail');
exit();
}
