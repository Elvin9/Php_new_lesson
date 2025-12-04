<?php

class Car{
    public $model;
    public $color;
    public $probeg;
    public $power_type;

    public function getPowerType(){
        echo "benzinda yuradigan";
    }
}

class eCar extends Car{
    public function getPowerType(){
        echo "Elektra yuradigan"."<br>";
    }

}

$byd = new eCar("Black",0);
echo $byd->getPowerType();


class Animal{

    protected $name;
    public function sound(){
        echo "any sound"."<br>";
    }

    final public function run(){
        return "Running";
    }
}

class Cat extends Animal {
    public function setName($name){
        return $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function sound(){
        echo "Meow"."<br>";
    }
}

$dog = new Cat();
$dog->sound();
$dog->setName("Graf");
echo $dog->getName()."<br>";
$cat = new Animal();
$cat->sound();
?>