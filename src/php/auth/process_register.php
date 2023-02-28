<?php

    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vote_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $sql = "INSERT INTO users (name, email, passwd) VALUES ('$username', '$email', '$passwd')";

    if ($username != '' && $email != '' && $passwd != '') {
        if (mysqli_query($conn, $sql)) {
            header('Location: /exec2/src/php/');
        }
    } else { header('Location: /exec2/src/php/'); }
    
    $conn->close();   

?>