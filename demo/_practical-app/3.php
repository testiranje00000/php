<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

    $number = 5;
    
    if($number > 3) {
        
        echo "I love PHP";
        
    } elseif ($number < 3) {
        
        echo "ASDF";
        
    } else {
        
        echo "I don't love PHP";
    }
    
    
    for($i = 0; $i <= 10; $i++) {
        
        echo $i . "<br>";
    }
	
    
    $switchNumber = 4;
    switch($switchNumber) {
        case 1:
            echo "number is 1";
            break;
        case 10:
            echo "number is 10";
            break;
        case 4:
            echo "number is 4";
            break;
        case 8:
            echo "number is 8";
            break;
        case 3:
            echo "number is 3";
            break;
        
        default:
            echo "unknown number";
            break;
    }
    
    echo "<br>";
    
    $inkrement = 0;
    
    do{
        echo $inkrement . " ";
        $inkrement++;
    }
    
    while($inkrement < 10)
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>