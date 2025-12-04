<?php


class MathUnit{
    public static function add($a,$b){
        return $a + $b ;
    }
    public static function info(){
        echo "Ammalarni bajarish uchun klass";
    }
}

echo MathUnit::add(55, 66);
echo "<br>";
echo MathUnit::info();



?>