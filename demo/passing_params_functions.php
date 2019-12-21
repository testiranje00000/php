<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    function greeting($message){
        
        echo $message;
        
    }
    
    greeting("test");
    
    
    
    function calculate($number1, $number2){
        
        $sum = $number1 + $number2;
        echo $sum;
        
    }
    
    calculate(12, 15);
?>


</body>
</html>