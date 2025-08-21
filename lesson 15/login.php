<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'namefinalproject');

if(isset($_POST['login'])){;

    $username = $_POST['username'];
    $userpassword = $_post['password'];

    $sql = "SELECT * FROM users WHERE username= '$username' AND password='$userpassword'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1)   {
        $_SESSION['username'] = $uusername;
        header("location: profile.php");
    }

    else{
        echo "<p style='font-weight:bold; text-align: center; margin-top: 15px;'>Login failed</p>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>login page</title>
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <style type="text/css">
    .login{
        width: 30px;
        min-width: 300px;
        border-color: tomato;
        border-style: solid;
        margin-top: 30px;
        padding: 10px;
        border-width: 7px;
        -webkit-box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
        -moz-box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
        box-shadow: 10px 10px 13px -2px rgba(0, 0, 0, 0.66);
    }
   </style>
</head>
<body>
    <div class="container-fluid" style="text-align: center;">
        <h1>welcome to login page!</h1>
        <h3>Please insert your username and passowrd!</h3>

    </div>
    <form action="login.php" method="post">
        <div class="container login">

        <div class="form-group">
            <label>username:</label>
            <input type="text" class="form-control" name="username" placeholder="Password">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <a href="register.php">Don't have an account? click here to register.</a> <br>
        <div style="text-align:center;">
            <button type="submit" name="login" class="btn btn-default">Submit</button>
        </div>
        </div>
    </form>

</body>
</html>