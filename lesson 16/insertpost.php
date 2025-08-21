<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = mysqli_connect($host, $user, $password, 'namefinalproject');

if(isset($_SESSION["username"])){
    header("location: login.php");
}
else{
    if(isset($_POST["submit"])){
        $title = addslashes($POST["title"]);
        $desc = addslashes($_POST["postdesc"]);
        $username = $_SESSION['username'];
        $query = "INSERT INTO post(`username`, `title`, `info`, `datepost`)VALUES('$username', '$title', '$desc', NOW())";
        
        if(!mysqli_query($db, $query)){
            echo mysqli_error($db);
        }
        else{
            header("Location: index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert new post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <div class="jumbotron">
            <h1>insert new post</h1>
            <p>hi, <?php echo $_SESSION['username']; ?>! insert your new post here</p>
        </div>
        <h4 style='text-align: right;'><a href="index.php">home</a></h4>
        <h4 style='text-align: right;'><a href="logout.php">logout</a></h4>
        <br>
        <form action="insertpost.php" class="form-horizontal" method="POST">
            <div class="form_group">
                <label for="title" class="control_label col-sm-2">title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" placeholder="enter post title">
                </div>

            </div>
            <div class="form-group">
                <label for="desc" class="control-label col-sm-2" >post</label>
                <div class="col-sm-10">
                    <textarea name="postdesc" rows="5" class="form-control" placeholder=" enter post description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primry" name="submit">submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>