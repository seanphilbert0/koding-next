<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'namefinalproject');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $userpassword = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$userpassword'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    }
    else{
        echo "<p style='font-weight: bold; text-align: center; margin-top: 15px;'>login failed</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <style type="text/css">
        .login{
            width: 30%;
            min-width: 300px;
            border-color: tomato;
            border-style: solid;
            margin-top: 30px;
            padding: 10px;
            border-width: 7px;
            -webkit-box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
            -moz-box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
            box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
        }
        body{
            background-color: gold;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="text-align:center;">
        <h1>welcome to login page!</h1>
        <h3>please inset your username and password!</h3>
    </div>

    <form action="login.php" method="post">
        <div class="conatiner login">

        <div class="form-group">
            <label>username:</label>
            <input type="password" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <a href="register.php">don't have account? click here to register.</a><br>
        <div style="text-align: center;">
            <button type="submit" name="login" class="btn btn-default">submit</button>
        </div>
        </div>
    </form>
</body>
</html>