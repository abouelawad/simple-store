<?php


session_start();


if(isset($_SESSION ['abou'])){



?>
	<form action="products.php" method="POST">
	<label> <h5>Search your product :</h5></label>
	<input type="Search" name="search" placeholder="product"  >
	<input type="submit" name="button" value="Search"> 

	</form>

<?php
	echo "<a href='04-items.php'>go back</a><br>";
	echo "<a href='06-logout.php'>logout</a>" ;

}else{
		
	echo "<script> location.href='01-login.php'</script>";


}
?>