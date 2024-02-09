<?php
session_start();
$_SESSION["liname"];
$liname = $_SESSION["liname"];

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

    <link rel="icon" type="image/PNG" href="media/icon1.png">

    <script src="https://kit.fontawesome.com/d02b5e525a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&family=Nunito+Sans:opsz,wght@6..12,300&family=Work+Sans:wght@100;200;300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="index.css" />
    <script src="javascript/styling.js"></script>

    <title>EventLens</title>
</head>

<body onload="alerts(<?= $_GET['alert'] ?>)">
<header>

    <nav class="navbar">
        <div class="navbar-content-left">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="media/logo.png"  class="navbar-logo" alt="Your Logo">
                </a>
            </div>

        </div>
        </div>
        <!--When user is logged in, the login button will change to the user name and will redirect to account page-->
        <!--User page not yet implemented-->
        <?php if (isset($_SESSION["liname"])){ ?>
            <div class="navbar-buttons">
            <a href="php/login.php" class="login-btn"><?= $_SESSION["liname"] ?></a>
            <a href="php/logout_process.php" class="register-btn">Logout</a>
            </div>

        <!--When not logged in, Login and Register buttons will be shown-->
        <?php } else { ?>
        <div class="navbar-buttons">
            <a href="php/login.php" class="login-btn">Login</a>
            <a href="php/register.php" class="register-btn">Register</a>
        </div>
    </nav>
    <?php } ?>


    </header>




<br>
    <div class="banner">
        <div class="banner-text">
            <h19>Snap, Share, Remember with Event Lens</h19>
            <p>Welcome to Event Lens – where every moment becomes a shared experience! With our platform, you can effortlessly capture and share.
                Event Lens makes it easy to snap, share, and cherish every moment with your favorite people. </p>
                <p>Join us and turn every occasion into a lasting memory!</p>
            <a href="php/login.php" class="banner-button">Start now ..  <i class="fa-solid fa-camera-retro"></i></a>
        </div>
        <img src="media/banner.png" alt="Banner Image" class="banner-img">
    </div><br>






<main>

    <h1>Why EventLens</h1>
    <p  class="why-us">We've designed this website especially for non-techies, ensuring it's very easy to use for everyone </p><br>

        <div class="grid-container-skill">
            <div id="gradient-border"  class="grid-item-skill">
                <i class="fa-solid fa-bolt"></i><br><br>
                <h4><b>Extremely Easy to Use</b></h4>
                <p> Using a secure code, you can access the album. from there you can upload,
                    download and view.</p>

            </div>

            <div class="grid-item-skill">
                <i class="fa-solid fa-lock"></i></i><br><br>
                <h4><b>Secure and Private</b></h4>
                <p>We value your privacy,
                    ensuring that only you and your chosen friends have access to your photos.
                </p>

            </div>

            <div class="grid-item-skill">
                <i class="fa-solid fa-cloud"></i><br><br>
                <h4><b>Digital Album</b></h4>
                <p>All photos are automatically saved in
                   a digital album for you to access at any time.
                </p>

            </div>

            <div class="grid-item-skill">
                <i class="fa-solid fa-download"></i><br><br>
                <h4><b>One-click Download</b></h4>
                <p>With just one click, you can download any photo to your device or cloud storage.
                </p>
            </div>




        </div><br><br><br>






    <div class="banner">
        <img src="media/mid-img.png" alt="mid Image" class="mid-img">
        <div class="banner-text">
            <h2>Never let another memory slip away <i class="fa-solid fa-wand-magic-sparkles"></i></h2>
            <p> You'll be inspired to pick up your camera and start snapping like never before.
                Our intuitive interface makes sharing photos with friends a breeze, creating a vibrant tapestry of shared experiences that will be
                cherished
                for years to come.</p>
            <p>
                every moment becomes a story waiting to be told. From birthdays to vacations, reunions to everyday adventures,
                our platform empowers you to capture, share, and relive life's precious moments with friends effortlessly.</p>


            <p>
                Don't wait for the perfect moment – start creating it today with Event Lens. Join us, and let's embark on a journey of discovery,
                laughter, and connection through the power of photography.
            </p>
        </div>

    </div><br>




    <a href="php/login.php" class="start-btn">Start creating   <i class="fa-solid fa-arrow-right"></i></a><br>



        <div class="slider">
            <div class="slide-container">
                <div class="slide">
                    <img src="media/slide/1.png" alt="Image 1">
                </div>
                <div class="slide">
                    <img src="media/slide/2.png" alt="Image 2">
                </div>
                <div class="slide">
                    <img src="media/slide/3.png" alt="Image 3">
                </div>

                <div class="slide">
                    <img src="media/slide/4.png" alt="Image 4">
                </div>
                <div class="slide">
                    <img src="media/slide/5.png" alt="Image 5">
                </div>
                <div class="slide">
                    <img src="media/slide/6.png" alt="Image 6">
                </div>
            </div>
        </div>

    </main>







<footer id="footer">
    <br>
    <hr>
    <div class="flex-containerfooter">
        <div class="flex-itemfooter"><i class="fa-regular fa-envelope"></i>: info@eventlens.nl</div>
        <div class="flex-itemfooter"><i class="fa-solid fa-phone"></i>: 0612345678</div>
        <div class="flex-itemfooter"><i class="fa-brands fa-facebook"></i>: facebook@eventlens</div>
        <div class="flex-itemfooter"><i class="fa-brands fa-instagram"></i>: insta@eventlens</div>
        <div class="flex-itemfooter">   <i class="fa-brands fa-whatsapp"></i>: +3161234567</div>

    </div>

   <p class="rechten">© EventLens-2024 All rights reserved</p>
    <br>
</footer>



</body>
<script src="javascript/main.js"></script>
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