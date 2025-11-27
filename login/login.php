<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['login'] == 'admin' and $_POST['password'] == "12345"){
        $_SESSION['login'] = 'admin';
        echo "Login saved <a href='Home.php'>Home</a>";
    } else {
        echo "login or password is wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">LOGIN</label><br>
        <input type="text" name="login" id=""><br>
        <label for="">PASSWORD</label><br>
        <input type="password" name="password" id="">
        <input type="submit" value="Save">
    </form>
</body>
</html>