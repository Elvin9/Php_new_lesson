<?php

$data = [
    "name" => "Sarvar",
    "age"  => 16,
    "city" => "New York",
];
$json = json_encode($data);
echo $json . "<br>";

$json = '{
    "name" : "Ali",
    "age" : 88,
    "city" : "Tashkent"
}';
$array = json_decode($json, true);
print_r($array);
echo "<br>";


$JsonText = file_get_contents('data.json');
$data = json_decode($JsonText);
print_r($data);

$array = [
    "name" => "vali",
    "age" => 18,
    "city" => "Urgench"
];
file_put_contents("user.json", json_encode( $array, JSON_PRETTY_PRINT));

?>