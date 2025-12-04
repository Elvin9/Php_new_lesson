<?php

class Car{
    private $model;
    protected $color;
    private $probeg;

      public function __construct($color, $probeg) {
        $this -> color = $color;
        $this -> probeg = $probeg;
    
    }
    public function setModel($model){
        $this->model = $model;

    }
    public function getModel(){
        return $this->model;
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


$captiva = new Car("Black",0);
$captiva->setModel("Captiva S7");
echo $captiva->getModel();


?>


