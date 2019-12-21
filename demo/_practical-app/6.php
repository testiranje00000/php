
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

    <form action="6.php" method="post">
        <input type="text" name="tekst" placeholder="Unesite tekst">
        <input type="submit" name="dugme" value="ISPISI ISPOD">
        
        
    </form>
     

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

    if(isset($_POST['dugme'])) {
        
        echo $_POST['tekst'];
        
    }
	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>