<?php
$x = 75;
function myfunc(){
    echo $GLOBALS['x'];
}

myfunc();


echo $_SERVER['PHP_SELF'];
echo "\n";
echo "\n";
echo $_SERVER['HTTP_HOST'];
