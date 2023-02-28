<?php

    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vote_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        while($row = mysqli_fetch_array($result)) {

            if ($row['passwd'] == $passwd) {
                $_SESSION["id"] = $row['id'];
                $_SESSION["email"] = $row['email'];
                header('Location: /exec2/src/php/');
            }

        }
        
    } else { header('Location: /exec2/src/php/'); }
    
    $conn->close();   

?>