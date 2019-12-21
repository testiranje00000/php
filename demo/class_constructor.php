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
        
        function __construct() {
            
            echo "Wheels move<br>";
            
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

?>


</body>
</html>