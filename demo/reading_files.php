<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
    
    
    $file = "example.txt";
    
    if($handle = fopen($file, 'r')) {
        
        echo $content = fread($handle, filesize($file)); //each byte equals a character
        
        
        fclose($handle);
        
    } else {
        
        echo "The application was not able to write on the file";
        
    }
    
    
    
    
    
?>


</body>
</html>