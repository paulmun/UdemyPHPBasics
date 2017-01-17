<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

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
    $chicken = 0;
    $donald = 0;

    $array = [999, 888, 777];

    if ($chicken) {

    } elseif ($donald) {

    } else {
        echo "I love PHP";
        echo "<br>";
    }

    for ($i = 0; $i < 10; $i++) {
        echo $i;
        echo "<br>";
    }

    foreach ($array as $object) {
        echo $object . "<br>";
    }

    switch ($chicken) {
        case 0: 
            echo "YES";
            echo "<br>";
            break;
        case 1: 
            echo 1;
            echo "<br>";
            break;
        case 2: 
            echo 2;
            echo "<br>";
            break;
        case 3: 
            echo 3;
            echo "<br>";
            break;
        case 4: 
            echo 4;
            echo "<br>";
            break;
        default:
            echo "Nope";
    }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>