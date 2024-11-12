<?php 
    class animal{
        public function sound(){
            echo "animal sound";
        }
    }
    
    class dog extends animal{
        public function sound()
        {
            echo "bank";
        }
    }
    
    class cat extends animal{
        public function sound()
        {
            echo "meo";
        }
    }
    
    echo "<pre>";
    
    $dog = new dog();
    $dog->sound(); // output:bank
    
    $cat =new cat();
    $cat->sound(); // output:meo
    
    
?>