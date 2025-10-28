<?php
$sonlar1 = array(12,23,25,55,64,89,78,77);
$sonlar = [63,33,66,55,44,88,99];
$fruits = [];
var_dump($sonlar);
echo $sonlar1[2];
echo "\n";
$sonlar[0] = 14;
echo $sonlar1[0];

echo "\n";
foreach($sonlar as $x){
    echo $x;
    echo "\n";
}

array_push($sonlar, 999);
$sonlar[] = 555;
var_dump($sonlar);
echo "\n";
array_push($fruits, "orange","pear","apple");
array_splice($fruits,1,1);
var_dump($fruits);

$cars = ["brand"=>"Chevi", "model"=>"Gentra","year"=>2024];
$cars["year"] = 2025;
$cars["color"] = "Black";
$cars += ["condition" => "new","paint" => "clear"];


var_dump($cars);


foreach($cars as $x => $y){
    echo $x.": ".$y;
    echo "\n";
}