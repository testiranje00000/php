<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    class Car {
        
        function MoveWheels() {
            
            echo "Wheels move";
            
        }
        
    }
    
    if(method_exists("Car", "MoveWheels")) {
        
        echo "Postoji";
        
    } else {
        
        echo "ne postoji";
        
    }
    
    
?>


</body>
</html>