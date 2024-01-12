<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" type="image/PNG" href="../media/icon1.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 9vw;
            background-image: url("../media/background.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
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
            width: 40%; /* Adjust as needed */
            height: auto;
            max-width: 200px;
            transition: transform 0.3s ease-in-out;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            max-width: 400px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.19);
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"]{
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

            body{
                background-image: url("../media/background.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: 110vw 150vh;
                overflow-x: hidden;
                overflow-y: hidden;
            }

            .logo {
                width: 60%;
            }

            h2 {
                font-size: 1.5em;
            }

            .container {
                max-width: 90%;
            }

            input[type="text"],
            input[type="password"] {
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
</a>
<div class="container">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="l_name" id="l_name" required minlength="5"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="l_pass" id="l_pass" required minlength="8"><br>

        <a href="register.php" target="_blank">Don't have an account yet? Register</a><br><br><br>
        <input type="submit" name="l_submit" id="l_submit" value="Login">
    </form>
</div>
</body>
</html>
