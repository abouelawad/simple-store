
<?php

	session_start();

if (isset($_SESSION['abou'])) {
	
	$price = $_POST['price'];
	$amount = $_POST['amount'];

	if (is_numeric($price ) != true ||  is_numeric($amount) != true){

		echo "YOU SHOULD ENTER NUMBERS ONLY No Strings.. <br>";
		echo "<a href='04-items.php'>go back</a>" ;
		
	

	}elseif ($price < 0 || $amount < 0 ) {
			echo "PLEASE ENTER   +ve VALUE <BR>";
			echo "<a href='04-items.php'>go back</a>" ;
			
	}else{
		


		$total = $price * $amount;
		$discount_10 = ($total-($total * 0.10));
		$discount_15 = ($total-($total * 0.15));




		
		if ($total<0) {
			echo "You Entered A -ve Value <br> SORRY , PURCHASE is not allowed <BR> ";
			echo "PLEASE ENTER a +ve VALUE <BR>";
			echo "<a href='04-items.php'>go back</a>" ;

		} else if ($total > 1000) {
			echo "Total price is " . $total . " $.<br>";

			echo "You have 15% discount - Please pay Only <br> " . round($discount_15, 2)  . " $ <br>"; 
			echo "<a href='search-form.php'> search more products</a><br>";
			echo "<a href='04-items.php'>go back</a><br>";
			echo "<a href='06-logout.php'>logout</a><br>" ;
		} else if ($total <= 1000) { 

			echo "Total price is " . $total . " $.<br>";

			echo "You have 10% discount - Please pay Only <br>" . round($discount_10, 2)  . " $ <br>"; 
			echo "<a href='search-form.php'> search more products</a><br>";
			echo "<a href='04-items.php'>go back</a><br>";
			echo "<a href='06-logout.php'>logout</a><br>" ;
			
		}
	}
	
}else{

	echo "<script> location.href='01-login.php'</script>";

}	


	
