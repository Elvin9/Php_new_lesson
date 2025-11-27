<?php
class Car{
    public $model;
    public $color;
    public $probeg;

      public function __construct($color, $probeg) {
        $this -> color = $color;
        $this -> probeg = $probeg;
    }
    public function set_probeg($probeg){
        $this -> probeg = $probeg;


    }

  

    public function get_probeg(){
        return $this -> probeg;
    }

    public function drive() {
        echo "Mashina yurimoqda" ;
    }
}

$BMW = new Car("Black",0);
$BMW ->model = "M5";
$BMW ->color = "Black";
echo $BMW->model. "<br>";
$BMW -> drive()."<br>";
//$BMW -> set_probeg(10000);
echo " <br> Probeg: ". $BMW->probeg. "<br>";
echo "probeg: ". $BMW->get_probeg()."<br>";
echo " <br> Color: ". $BMW->color. "<br>";


$Porsche = new Car("White",0);
$Porsche -> model = "CS 911";
$Porsche -> color = "white";
echo "<br>".$Porsche ->color. "<br>";
echo $Porsche -> model. "<br>";
?>