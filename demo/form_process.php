<?php

if(isset($_POST['submit'])) {
    
    $names = ["Ilija", "Student", "Ime"];
    $minimum = 4;
    $maximum = 10;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($username) < $minimum || strlen($username) > $maximum) {
        
        echo "Username has to be longer than four and less than ten <br>";
        
    }
    
    if(!in_array($username, $names)) {
       
        echo "User not found";
        
    } else {
        
        echo "Welcome " . $username;
    }
    
    
    //echo "Hello " . $username . "<br>";
    //echo "Password is " . $password;
    
    //print_r($_POST);
    
    
}

?>