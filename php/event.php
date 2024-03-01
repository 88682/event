<?php
session_start();
$_SESSION["coname"];
$coname = $_SESSION["coname"];

if (!isset($_SESSION["coname"])){
    header('Location:login.php');
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
}
else {
  $data2 = "Connected successfully";
  echo("<script>console.log('PHP: " . $data2 . "');</script>");
}
?>

<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/PNG" href="../media/icon1.png">

    <script src="https://kit.fontawesome.com/d02b5e525a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&family=Nunito+Sans:opsz,wght@6..12,300&family=Work+Sans:wght@100;200;300;400&display=swap" rel="stylesheet">

    <title>Event</title>
</head>

<body>
<header>

    <nav class="navbar">
        <div class="navbar-content-left">
            <div class="navbar-logo">
                <a href="../index.php">
                    <img src="../media/logo.png"  class="navbar-logo" alt="Your Logo">
                </a>
            </div>
        </div>
        <div class="navbar-buttons">
            <a href="logout_process.php" class="register-btn">Logout</a>
        </div>
    </nav><br><br>


</header>

<?php

$sql1 = "SELECT event_name FROM event_codes WHERE id = '$coname'";
$result1 = $conn->query($sql1);
$count = 0;
?>
<?php

if ($result1->num_rows > 0) {
    // output data of each row
    while ($row = $result1->fetch_assoc()) {
        ?>

    <div class="title-top">
        <h17><?= $row ["event_name"] ?></h17>
        <p>Click on the photo you want to download</p>
    </div>

    <?php
                }
            }
        ?>

    <div class="banner"><br><br>


    <div class="button-container">
            <a href="upload.php" class="modern-button">Upload photo's <i class="fa-solid fa-upload"></i></a>

            <!--<a href="" id="downloadButton" class="modern-button">Download Photo's <i class="fa-solid fa-circle-arrow-down"></i></a>-->

        </div>


    <! --  fotos zijn place holders voor nu -->

    <div class="photo-album">

            <?php

        $sql1 = "SELECT id, photo_name, photo_uploader, upload_date FROM event_photos WHERE event_id = '$coname'";
        $result1 = $conn->query($sql1);
        $count = 0;
        ?>
        <?php

        if ($result1->num_rows > 0) {
            // output data of each row
            while ($row = $result1->fetch_assoc()) {
                $divid = $row ["id"];
                ?>

            <div class="photo" id="photoDiv<?= $row['id']?>">
                <a href="../media/fotos/<?= $row['photo_name']?>" download="<?= $row['photo_name']?>">
                <img src="../media/fotos/<?= $row['photo_name']?>" alt="<?= $row['photo_name']?>">
                </a>
            <div class="name-date-container">
                <p class="name"><?= $row ["photo_uploader"] ?></p>
                <p class="date"><?= $row ["upload_date"] ?></p>
            </div>
            </div>
                <?php
                }
            }
        ?>

        <!--
        <div class="photo">
            <a href="../media/fotos/9.png" download="Photo9">
                <img src="../media/fotos/9.png" alt="Photo 9">
            </a>
            <div class="name-date-container">
                <p class="name">Name Person</p>
                <p class="date">date </p>
            </div>
        </div>
        -->


    </div>
</div>





<style>

 body {
        margin: 0;
        overflow-x: hidden;
        font-family: Arial;
    }


 /* cards */

 .photo-album {
     display: flex;
     flex-wrap: wrap;
     gap: 1vw;
     padding: 1vw;
     justify-content: space-around;
     margin: 1vw auto;
 }

 .photo {
     overflow: hidden;
     flex: 1 1 calc(33.33% - 30px);
     max-width: calc(33.33% - 30px);
     margin: 1vw 1px;

 }

 .photo img {
     width: 100%;
     object-fit: cover;
     border-radius: 5px;
     height: 20vw;
 }

 .photo a {
     position: relative;
 }

 .photo a::after {
     content: "Click to Download";
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translateX(-50%);
     background-color: #333;
     color: #fff;
     padding: 5px;
     border-radius: 5px;
     opacity: 0;
     visibility: hidden;
     transition: opacity 0.3s, visibility 0.3s;
 }

 .photo a:hover::after {
     opacity: 1;
     visibility: visible;
 }


 .name {
     padding: 10px 25px;
     color: #333333;
 }

 .date {
     float: right;
     padding: 10px 25px;
     color: #8c8c8c;
 }

 .name-date-container {
     display: flex;
     justify-content: space-between;
     align-items: center;
     border-bottom-left-radius: 20px;
     border-bottom-right-radius: 20px;
     border-top-left-radius: 0;
     border-top-right-radius: 0;
     max-width: calc(100%);
     background-color: #f3f3f3;
 }

 /*****/

    h1{
        font-family: Arial;
        text-align: center;
        margin-top: 17vh;
    }
    h3{
        font-family: Arial;
        text-align: center;
        font-size: 25px;

    }
     h4{
         font-family: Arial;
         font-size: 35px;
     }
    h14{
        font-family: Arial;
        text-align: left;
        font-size: 30px;
        margin-bottom: 2vw;
        font-weight: bold;
    }

    .title-top{
        text-align: center;
        font-family: Arial;
        margin-top: 3vw;
    }

     h17{
         font-family: Arial;
         font-size: 35px;
         font-weight: bold;
     }
     .title-top p{
         font-size: 18px;
     }

    .banner{
       margin: auto 10vw;
        height: 100vw;
    }

     .button-container {
         display: flex;
         justify-content: right;
     }

     .modern-button {
         background-color: #88b5f6;
         padding: 12px 35px;
         margin: 2vw 2vw;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         font-size: 16px;
         transition: background-color 0.3s ease;
     }

     .modern-button:hover {
         background-color: #aed0fa;
     }

      a{
         text-decoration: none;
         display: flex;
         padding: 0;
         font-size: 16px;
         color: black;
     }

    i{
        margin: auto 8px;
    }


 /* nav */


     .navbar {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 1px 2vw;
         background-color: rgba(248, 248, 248, 0.75);
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
     }

     .navbar-content-left {
         display: flex;
         align-items: center;
     }

     .navbar-logo img{
         height: 97px;
     }


    .navbar-logo:hover {
        transform: scale(1.05);
    }


    .navbar-options {
        list-style-type: none;
        display: flex;
        padding: 0;
        font-weight: bold;
        font-size: 16px;
        margin-left: 3vw;
    }

    .navbar-options li {
        margin-right: 3vw;
    }

    .navbar-options a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }

    .navbar-options a:hover {
        color: #78a4e5;
    }


    .navbar-buttons a {
        padding: 8px 15px;
        margin-left: 15px;
        text-decoration: none;
        border: 1px solid #333;
        border-radius: 4px;
        font-weight: bold;
        transition: all 0.3s ease;
    }


    .register-btn {
        padding: 8px 15px;
        margin-right: 4vw;
        text-decoration: none;
        border: 1px solid #333;
        border-radius: 4px;
        color: #dedede;
        background-color: #333;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .register-btn:hover {
        color: #79aae8;
        background-color: #f5f5f5;
        font-weight: bold;
        border-color: #aed0fa;
    }

 /* Responsive Styles */

 @media only screen and (max-width: 600px) {

    .navbar{
        padding: 1px 10px;
    }

     .navbar-logo img {
         margin-right: 1vw;
         width: 20vw;
         height: 20vw;
     }

     .navbar-options a{
         padding: 1px 15px;
     }

     .title-top{
         margin-top: 10vw;
     }

     .photo {
         flex: 1 1 calc(100% - 1px);
         max-width: calc(100% - 1px);
     }

     .photo img {
         margin-top: 5vw;
         width: 100%;
         object-fit: cover;
         border-radius: 5px;
         height: 90vw;
     }

     .modern-button  {
         background-color: #aed0fa;
         padding: 5px 25px;
         border: none;
         border-radius: 5px;
         font-size: 16px;
     }


 }



</style>
</body>

<script src="../javascript/main.js"></script>
<?php
    if (isset($_GET['alert'])){
        echo "<script>";
        echo "alerts('". $_GET['alert']."')";
        echo "</script>";
    }
    if (isset($_GET['page'])){
        echo "<script>";
        echo "divswitch('". $_GET['page']."')";
        echo "</script>";
    }
    ?>

</html>