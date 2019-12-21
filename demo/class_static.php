<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    class Car {
        
        static $wheels = 4; //static se poziva bez pravljenje instance, isto vazi i za metode
        var $hood = 1; //za obicne promenljive mora se napraviti instanca 
        
        function brojTockova() {
            
            echo Car::$wheels;
            
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
    
    //echo $bmw->wheels; //ne radi je static
    
    echo Car::$wheels; //echo static wheels
    Car::brojTockova(); //metoda brojTockova
    
    //echo Car::$wheels;
?>


</body>
</html>