<?php
    class Car{
        public $model;
        public $color;
        public function __construct($m,$c){
            $this->model = $m;
            $this->color = $c; 
        }
        public function message(){
            return "Car model is ".$this->model. " and color is ".$this->color;
        }
    }

    $myCar = new Car("Ferrari", "Redd");
    print($myCar->message()."<br/>");
    print($myCar->model."<br/>");
    print($myCar->color);
?>