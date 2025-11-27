<?php
//try { 
//    $number = 10/0;
//
//} catch(Exception $e){
//  echo "Something went wrong!" . $e->getMessage();
//}

try { 
   $a = 13;
if($a % 2 != 0){
    throw new \Exception("The number cannot be divided by 2");
}

} catch(Exception $e){
    echo "Something went wrong!" . $e->getMessage();
}

?>