<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$targetDir = "../../assets/images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$descript = $_POST['descript'];
$user_id = $_SESSION["id"];


if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

    $sql = "INSERT into photos (name, descript, user_id) VALUES ('".$fileName."', '$descript', '$user_id')";

    $result = mysqli_query($conn, $sql);

    if ($result){ header('Location: /exec2/src/php/'); }
}


?>