<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "Before you have to save login <a href='login.php'>login saving</a>";
    exit;
    
}
echo "Welcome !" . $_SESSION['login'];
?>

<br>
<a href="logout.php">Exit</a>