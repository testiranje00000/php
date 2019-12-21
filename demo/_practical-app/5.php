<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	$number = 5;
    
    echo rand (1, 1000);
    echo "<br>";
    
    echo sqrt($number);
    echo "<br>";
    echo pow(3, $number);
    echo "<br>";
    
    $string = "Ovo je string";
    echo strlen($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    
    $niz = [111, "string neki", $string];
    
    echo in_array($string, $niz);
    
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>