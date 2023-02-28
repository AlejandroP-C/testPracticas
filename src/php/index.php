<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.2/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.2/dist/js/uikit-icons.min.js"></script>

    <title>Exec 2</title>
</head>

<body>


<?php

    session_start();

    if ($_SESSION["email"]) {

        ?>

        <a href="/exec2/src/php/logout.php"><button>Logout</button></a>

        <?php
        
        include("./templates/vote_system.php");

    } else { include("./auth/login.php"); }
    

?>

</body>

</html>