<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    $file = "example.txt";
    
    $handle = fopen($file, 'w');
    
    fclose($handle);
    
    
?>


</body>
</html>