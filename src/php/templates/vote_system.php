<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = $conn->query("SELECT
photos.id,
photos.name,
photos.descript,
COUNT(votes.photo_id) AS total
FROM
photos
LEFT JOIN votes ON photos.id = votes.photo_id
GROUP BY photos.id; ");

if (isset($_SESSION["vote_once"])) { echo $_SESSION["vote_once"]; }

if ($query->num_rows > 0) {

    ?> 

        <div class="uk-margin-large" style="transform: scale(.9)">

            <table class="uk-table uk-table-justify uk-table-divider">
                <thead>
                    <tr>
                        <th><button class="uk-button" style="background-color: #198754;"><a href="/exec2/src/php/templates/upload_form.php" style="color: black; text-decoration: none;">Add</a></button></th>
                        <th>Description</th>
                        <th>Total votes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php

                        while ($row = $query->fetch_assoc()) {
                            $imageURL = '/exec2/src/assets/images/' . $row["name"]; ?>

                            <form action="/exec2/src/php/forms/process_vote.php" method="post">

                                <tr>
                                    <td><img src="<?php echo $imageURL; ?>" style="height: 100px;" /></td>
                                    <td><?php echo $row["descript"]; ?></td>
                                    <td><?php echo $row["total"]; ?></td>
                                    <td><button class="uk-button uk-button-default" type="submit">Vote</button></td>
                                </tr>

                            </form> <?php
                        }

                    ?> 
    

                </tbody>

            </table>

        </div>

    <?php
} else { header('Location: ./templates/upload_form.php'); }

?>

