<?php

    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vote_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $user_id = $_SESSION["id"];
    $photo_id = $_POST['photo_id'];

    $sql = "SELECT * FROM votes WHERE user_id = $user_id";

    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {

        $sql = "INSERT INTO votes (user_id, photo_id) VALUES ('$user_id', '$photo_id')";

        if (mysqli_query($conn, $sql)) { header('Location: /exec2/src/php/'); }

    } else { 
    
        $msg = "Solo se permite votar una vez";

        $_SESSION["vote_once"] = $msg;
        
        header('Location: /exec2/src/php/'); 
    
    }
    
    $conn->close();   

?>