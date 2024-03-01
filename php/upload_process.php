<?php
session_start();
$_SESSION["coname"];
$coname = $_SESSION["coname"];

if(isset($_POST['u_submit'])){
  $ufile = $_FILES['u_name'];
  $uname = $ufile['name'];
  print_r($uname);
  $uuploader = $_POST['u_uploader'];
  $udate = $_POST['u_date'];

  $map = "../media/fotos/";
  if (move_uploaded_file($ufile['tmp_name'], $map.$ufile['name'])){
    echo "<p> $uname is geupload!</p>";
  }


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

$sql = "INSERT INTO event_photos (photo_name, photo_uploader, event_id, upload_date)
VALUES ('$uname', '$uuploader', '$coname', '$udate')";

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

header('Location:upload.php?alert=uploaded');
exit();
} else {
header('Location:../index.php?alert=serverfail');
exit();
}