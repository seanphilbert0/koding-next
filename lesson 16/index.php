<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = mysqli_connect($host, $user, $password, 'namefinalproject');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrpcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootsrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <div class="jumbotron">
            <h1>My Website</h1>
            <?php
            if(isset($_SESSION['username'])){
                echo "<h3>welcome, " . $_SESSION['username'] . "!</h3>";
                echo "<p>click <a href='insertpost.php'>here</a>to submit article</p>";
                echo "</div>";
                echo "<h4 style='text-align: right;'><a href='logout.php'>logout</a></h4>";
            }
            ?>
            <br>
            <h1 class="rp">Recent Posts</h1>
            <?php
            $query = "SELECT * FROM posts ORDER BY datepost DESC";
            $results = mysqli_query($db, $query);

            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='post'>";
                echo "<h2>" . $row['title'] . "</h2>";               
                echo "<p class='dt'>Creator: " . $row['username'] . '</p>';
                echo "<p class='dt'>Date: " . $row['datepost'] . "</p>";
                echo "<p>" . $row['info'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>