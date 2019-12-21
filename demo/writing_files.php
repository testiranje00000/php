<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    $file = "example.txt";
    
    if($handle = fopen($file, 'w')) {
        
        fwrite($handle, 'I love PHP');
        
        
        fclose($handle);
        
    } else {
        
        echo "The application was not able to write on the file";
        
    }
    
    
    
    
    
?>


</body>
</html>