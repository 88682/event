<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="icon" type="image/PNG" href="../media/icon1.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;

        }

        .button-logout {
            background-color: #881111;
            border: none;
            color: white;
            padding: 10px 40px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            margin: 1vw 1vw;

        }

        .button-logout:hover {
            background-color: #cecece;
            color: #881111;

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
            margin: 5vw auto;
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

            body {
                background-color: #f2f2f2;
                overflow-x: hidden;
                overflow-y: hidden;
            }

            .logo {
                width: 40%;
            }

            h2 {
                font-size: 1.2em;
            }

            .container {
                max-width: 80%;
                margin-top: 20vw;
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
<div>
    <button class="button-logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</button>
</div>

<div class="container">
    <h2>Creat an event:</h2><br>
    <form action="" method="post">
        <label for="username">Event name:</label>
        <input type="text" name="username" required minlength="5" placeholder="Name for the event"><br><br>

        <label for="username">Code:</label>
        <input type="text" name="username" required minlength="5" placeholder="Share this code later"><br><br>

        <input type="submit" value="Save">
    </form>
</div>
</body>
</html>
