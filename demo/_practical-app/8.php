<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
        
        $promenjiva = "Nekitekst";
        
        $hashFormat = "$2y$10$";
        $salt = "ovdeima14slovadvadeset";
        $hashFAndSalt = $hashFormat . $salt;
        
        $promenjiva = crypt($promenjiva, $hashFAndSalt);
        
        echo $promenjiva;

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>