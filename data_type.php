<?php
#php data type

$string = "Hello World"; # string
$int = 1240; #integer
#var_dump($int); #var_dump() return data type and value

$float = 1.244; //float
#var_dump($float);

//boolean 
$tr = true;
$fl = false;

//array
$car = array('Volvo', 'Toyota', 'Merc');
#var_dump($car);

#class
class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model; 
    }
    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car('black', 'Volvo');
#echo $myCar -> message();
#echo '<br>';

$myCar = new Car('red', 'Toyota');
#echo $myCar -> message();

##Null
$vale = "Hello World!";
$vale = null;
var_dump($vale);

?>