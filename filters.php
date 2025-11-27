<?php
$str = "<h1>Hello world!</h1>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr."<br>";

$email = "ibra(gim)ove122@gmail.com";
$clean = filter_var($email,FILTER_SANITIZE_EMAIL);
echo $clean."<br>";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email is correct";

} else{
    echo "Email is incorrect". "<br>";
}

$age = 26;
if(filter_var($age, FILTER_VALIDATE_INT)){
    echo " The age is integer". "<br>";
} else {
    echo "The age is not integer". "<br>";
}
$url = "https://www.w3schools.com/";
if(filter_var($url, FILTER_VALIDATE_URL)){
    echo "URL is correct"."<br>";

} else {
    echo "it is not correct"."<br>";
}
?>

