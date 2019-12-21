<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    class Car {
        
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        
        function MoveWheels() {
            
            echo "Wheels move<br>";
            
        }
        
        function PromenaBrojaGume() {
            
            $this->wheels = 10; //this se odnosi na instancu klase koja poziva metodu
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

    
    class Plane extends Car { //nasledjivanje, nasledjuje sve promenjive i metode
        
        var $wheels = 20; //override parrent(Car) 
        
        
    }
    
    $jet = new Plane();
    
    $jet->MoveWheels();
    echo $jet->wheels;
    
//    if(class_exists("Plane")) {
//        echo "postoji";
//    } else {
//        echo "ne postoji";
//    }
?>


</body>
</html>