<?php

$a = 5;
$b = 5.34;
$c = "25";

var_dump(value: is_int(value:$a));
echo "\n";
var_dump(value: is_int(value:$b));
echo "\n";
var_dump(value: is_float(value:$b));
echo "\n";
var_dump(value: is_string(value:$c));
echo "\n";
var_dump(value: is_numeric(value:$b));