<?php
abstract class Payment{
    public $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    abstract public function pay();
    public function info(){
        return "Summa of the payment is {$this->amount} so'm <br>";
    }
}

class Payme extends Payment{
    public function pay(){
        return "Payment is paid by Payme app";
    }
}
class Click extends Payment{
    public function pay(){
        return "Payment is paid by Click app <br>";
    }
}

$sum = new Click(9999);
echo $sum->info();
echo $sum->pay();
$sum1 = new Payme(1111);
echo $sum1->info();
echo $sum1->pay();
?>