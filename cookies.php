<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name =  $_POST['name'];

setcookie('name',$name,time()+60);
echo " <a href='cookies.php'>Sahifani yangilash</a> ";



}

$filename = 'http://localhost:8000/cookies.php';
if($filename  ==  ' http://localhost:8000/cookies.php' ){
    echo " <a href='unset-cookie.php'>Cookieni o'chirish</a> ";
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Simple Page Frame</title>
 
</head>
<body>
<?php
    if(isset($_COOKIE['name'])){
        echo 'Assalomu alaykum'. $_COOKIE['name'] . " <a href='unset-cookie.php'>Cookieni o'chirish</a> " ;
    
    } else{
        echo '
            <form action="" method="POST">
    <label for="">Ismingizni kiriting</label>
    <input type="text" name = "name" id = "">
    <button type="submit">Saqlash</button>
    </form> ' ;
        
    }
?> 

    </form>
  </div>
</body>
</html>
