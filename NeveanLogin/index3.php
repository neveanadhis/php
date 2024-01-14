<?php
session_start();
$_SESSION;
include("connection.php");
include("functions.php");
$user_data=check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: orange;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: white;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>

    <header>
        <h1>Welcome to The Great Website</h1>
    </header>

    <main>
        <p>NEVEAN</p>
       
    </main>

    <footer>
        &copy;  NEVEAN
    </footer>

</body>
</html>