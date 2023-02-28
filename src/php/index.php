<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include_once('./headers.php') ?>

    <title>Exec 2</title>
</head>

<body>


<?php

    session_start();

    $_SESSION["email"] = null;

    if ($_SESSION["email"] != null) {

        ?> <a href="/exec2/src/php/logout.php" style="color: black; text-decoration: none;"><button class="uk-button" style="background-color: red;">Logout</button></a> <?php
        
        include("./templates/vote_system.php");

    } else { include("./auth/login.php"); }
    

?>

</body>

</html>