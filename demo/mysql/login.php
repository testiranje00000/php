<?php


if(isset($_POST['submit'])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $connection = mysqli_connect('localhost', 'root','','loginapp');
    
    if($connection) {
        
        echo "we are connected";
        
    } else {
        
        die("Database connection failed");
    }
    
    
    /*if($username && $password) {
        
        echo $username . "<br>" . $password;
        
    } else {
        
        echo "Enter both.";
        
    }
    */
    
    //echo $username . "<br>" . $password;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>

<div class="container">
    
    <div class="col-sm-6">
       
        <form action="login.php" method="post">
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
                   
                <br>
            
            <div class="form-group">    
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
                   
                <br>
                
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">                
            
        </form>
        
    </div>
       
</div>

<?php
    
    
    
    
    
?>


</body>
</html>