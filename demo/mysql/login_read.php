<?php 
include "db.php";
include "functions.php";
?>

<?php include "includes/header.php"; ?>

<div class="container">
    
    <div class="col-sm-6">
       
       
        <pre>
        <?php
            readAll();
        ?>
        </pre>
        
    </div>
       
</div>

<?php include "includes/footer.php"?>