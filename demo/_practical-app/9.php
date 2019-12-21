<?php include "functions.php" ?>
<?php
    session_start();

    $_SESSION['sesija'] = "Sesija otvorena";
    $_SESSION['drugaVrednost'] = "Ovo je druga vrednost sesije";
?>

 
<?php
  
    $ime = "kuki";
    $vrednost = "vrednost kukija";
    $trajanje = time() + (60*60*24*7);
    
    setcookie($ime, $vrednost, $trajanje);
    
?>
<?php include "includes/header.php" ?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		<a href="9.php?parametar=100&drugiParametar=macka">Click Here<br></a>
	
	<?php
        

        if(isset($_GET['parametar'])) {
            echo $_GET['parametar'] . "<br>";
        }
        if(isset($_GET['drugiParametar'])) {
            echo $_GET['drugiParametar'];
        }
                
        if(isset($_COOKIE['kuki'])) {
            echo "<pre>";
            print_r($_COOKIE['kuki']);
            echo "</pre>";
        }
        
                
        if(isset($_SESSION['sesija'])) {
            echo $_SESSION['sesija'] . "<br>";
        }
                
        if(isset($_SESSION['drugaVrednost'])) {
            echo $_SESSION['drugaVrednost'];
        }
        
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
                
	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>