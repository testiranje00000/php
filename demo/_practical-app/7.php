<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
   
<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'proba');

    if(!isset($conn)) {
        die("error");
    } else {
        echo "connected";
    }
    
?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
        
        $query = "SELECT * FROM tabela";
        $result = mysqli_query($conn, $query);    
        
        if(!$result) {
            die("nije ucitano iz baze");
        } else {
            echo("ucitano iz baze <br>");
        }
        
        while($row = mysqli_fetch_assoc($result)) {
            
            print_r($row);
            
        }
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
