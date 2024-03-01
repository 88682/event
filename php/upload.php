<?php
session_start();
$_SESSION["coname"];
$coname = $_SESSION["coname"];

if (!isset($_SESSION["coname"])){
    header('Location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>UploadEvent</title>
    <link rel="icon" type="image/PNG" href="../media/icon1.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #e5e5e5;
        }

        h2 {
            color: #333;
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .home-logo {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 10%;
            height: auto;
            max-width: 200px;
            transition: transform 0.3s ease-in-out;
            float: left;
            margin: auto 1vw;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin: 10vw auto;
            max-width: 400px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.19);
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="file"],
        input[type="date"]
        {
            width: 90%;
            padding: 12px;
            margin-bottom: 10px;
            background-color: #f2f2f2;
            border: none;
            border-radius: 3px;
            color: #333;
        }

        input[type="submit"] {
            width: 97%;
            padding: 12px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media only screen and (max-width: 600px) {


            .logo {
                width: 20%;
            }

            h2 {
                font-size: 1.2em;
            }

            .container {
                margin: 20% auto;
                max-width: 60%;
            }

            input[type="text"],
            input[type="password"],
            input[type="file"],
            input[type="date"] {
                width: 90%;
                padding: 12px;
                margin-bottom: 10px;
                background-color: #f2f2f2;
                border: none;
                border-radius: 3px;
                color: #333;
            }



        }
    </style>
</head>
<body>
<a class="home-logo" href="../index.php">
    <img src="../media/logo.png" class="logo" alt="Your Logo">
</a><br>
<div class="container">
    <h2>Upload your event photo's</h2><br>
    <form action="upload_process.php" method="post" enctype="multipart/form-data">

        <?php
        session_start();
        $_SESSION["liname"];
        $liname = $_SESSION["liname"];
        ?>
        <label for="username"><?= $liname ?></label>
        <input type="hidden" name="u_uploader" value="<?= $liname ?>" ><br><br>

        <label for="username">Date:</label><br>
        <input type="date" name="u_date" required><br><br>


        <div class="upload-container">
            <label for="photoInput" class="upload-button">
                Choose Photos
            </label>
            <input type="file" id="photoInput" name="u_name" class="hidden" accept="image/*" multiple onchange="handleFileSelect(event)">
        </div>

        <input type="submit" name="u_submit" id="u_submit" value="Upload">
    </form>
</div>


<!--  meer dan een foto uploaden -->
<script src="morePhotos.js"></script>
<script src="../javascript/main.js"></script>
</body>

<?php
    if (isset($_GET['alert'])){
        echo "<script>";
        echo "alerts('". $_GET['alert']."')";
        echo "</script>";
    }
    ?>

</html>
