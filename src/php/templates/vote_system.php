<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = $conn->query("SELECT * FROM photos");

if (isset($_SESSION["vote_once"])) { echo $_SESSION["vote_once"]; }

if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $imageURL = '/exec2/src/assets/images/' . $row["name"]; ?>
        <form action="/exec2/src/php/forms/process_vote.php" method="post">
            <img src="<?php echo $imageURL; ?>" alt="" style="height: 400px;" />
            <input type="hidden" value="<?php echo $row["id"]; ?>" id="photo_id" name="photo_id" />
            <button type="submit">Vote</button>
        </form>
        <?php
    }
} else { header('Location: ./templates/upload_form.php'); }

?>


<a href="/exec2/src/php/templates/upload_form.php">Add</a>