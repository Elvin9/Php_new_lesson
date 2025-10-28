<?php

function myworld(){
    echo "Hello World! \n";
}
myworld();

function fullName($firs_name, $last_name){
    echo $firs_name." ".$last_name. "\n";

}
fullName("Kamol","Ilhomov");

function age($b_year, $year = 2025){
    return $year - $b_year;
    

}
echo age(2009);


echo "\n";

function son($number){
     $summa = 0;
    for ($i = 2; $i <= $number; $i+=2) {
        $summa += $i;
        
    }
    return $summa;

}
echo son(12);

$nums = array(23,26,31,55,77);
