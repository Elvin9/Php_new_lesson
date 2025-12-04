<?php

interface Payment{
    public function pay($amount);

}
interface Payment1{
    public function check();
}

class Payme implements Payment{
    public function pay($amount){
        echo "Payme: $amount is paid! <br>"; 
    }
    public function check(){
        echo "Check is printed <br>";
    }
}

class Click implements Payment{
    public function pay($amount){
        echo "Click: $amount is paid! <br>";
    }
    public function check(){
        echo " Check is printed";
    }
}

$pay1 = new Payme();
$pay1->pay(9999);
$pay1->check();
$pay2 = new Click();
$pay2->pay(5555);
$pay2->check();

?>