<?php
    class Car{
        public $brand;
        public $color;
        
        public function drive(){
            echo "driving $this->brand car" . PHP_EOL;
        }
    }
    echo '<pre>';
    
    $myCar1 = new Car();
    $myCar1->brand = "toyota";
    $myCar1->color = "red";
    $myCar1->drive();
    


?>