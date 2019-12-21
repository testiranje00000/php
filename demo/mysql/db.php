<?php
   $connection = mysqli_connect('localhost', 'root','','loginapp');
    
    if($connection) { 
        echo "we are connected <br>";  
    } else {  
        die("Database connection failed <br>");
    }
?>