<?php 
    
    class Vehicle{
        public $brand;
        public function honk(){
            echo "hongking";
        }
    }
    class Car extends Vehicle{
        //thuoc tinh
        public $model;
        
        //phuong thuc
        public function honk(){
            echo "honking";
        }
        public function drive(){
            echo "driving $this->brand $this->model" ;
            //this=mycar1
        }
    }
    
    $myCar1 = new Car();
    $myCar1->brand = "mec";
    $myCar1->model = "c0e";
    
    //goi phuong thuc
    $myCar1->honk();
    $myCar1->drive();
?>