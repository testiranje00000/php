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
        echo in_array($username, $names);
        
    } else {
        
        echo "Welcome " . $username;
        echo in_array($username, $names);
    }
    
    
    //echo "Hello " . $username . "<br>";
    //echo "Password is " . $password;
    
    //print_r($_POST);
    
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
    
</form>

    
    
    
    



</body>
</html>