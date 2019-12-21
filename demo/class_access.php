<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    class Car {
        
        public $wheels = 4; //vidi se i van klase
        protected $hood = 1; //vidi se samo unutar klase i u nasledjenoj klasi
        private $engine = 3; //vidi se samo unutar klase
        var $doors = 4;
        
        function MoveWheels() {
            
            echo "Wheels move<br>";
            
        }
        
        function PromenaBrojaGume() {
            
            $this->wheels = 10; //this se odnosi na instancu klase koja poziva metodu
        }
        
        function showProperty() { //private i protected mora da se prikaze preko metode
            
            echo $this->hood;
        }
        
        function prikazi() { 
            echo $this->engine; 
        }
    }
    
//    if(method_exists("Car", "MoveWheels")) {
//        
//        echo "Postoji";
//        
//    } else {
//        
//        echo "ne postoji";
//        
//    }
    
    
    $bmw = new Car(); //kreiranje nove instance klase Car

    //echo $bmw->hood; //ne moze da prikaze jer je protected
    
    //$bmw->showProperty(); //prikazuje private i protected jer je preko metode
    
    //$bmw->prikazi();
    
    class Semi extends Car {
        
       function showProperty() { //radi override jer je hood protected i moze da se vidi u nasledjenoj klasi
            
            echo $this->hood;
        }
        
//        function prikazi() { //ne radi override jer je private i ne vidi engine
//            echo $this->engine; 
//        } 
        
    }
    
    $semi = new Semi();
    //$semi->showProperty(); //prikazuje nasledjenu metodu
    $semi->prikazi(); //prikazuje jer je nasledjena metoda
?>


</body>
</html>