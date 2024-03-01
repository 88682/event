<?php

if(isset($_POST['r_submit'])){
  $rname = $_POST['r_name'];
  $rpass = $_POST['r_pass'];
  $rpass_enc = sha1($rpass);

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
  header('Location:index.php?alert=serverfail');
  exit();
}
else {
  $data2 = "Connected successfully";
  echo("<script>console.log('PHP: " . $data2 . "');</script>");
}

$sql = "SELECT user_name FROM event_users WHERE user_name='$rname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $conn->close();
  header('Location:register.php?alert=doublename');
  exit();
}

$sql = "INSERT INTO event_users (user_name, user_pass)
VALUES ('$rname', '$rpass_enc')";

if ($conn->query($sql) === TRUE) {
  $data3 = "New record created successfully";
  echo("<script>console.log('PHP: " . $data3 . "');</script>");
} else {
  $data4 = "Could not create the record.";
  echo("<script>console.log('PHP: " . $data4 . "');</script>");
  header('Location:index.php?alert=serverfail');
  exit();
}
$conn->close();

header('Location:../index.php?alert=registered');
exit();
} else {
header('Location:../index.php?alert=serverfail');
exit();
}