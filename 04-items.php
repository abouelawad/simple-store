
<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<style> 
		input[type='number'] { 
   
    	-moz-appearance: textfield;
   
		}

	</style>
</head>
<body>

<?php
	if (isset($_SESSION['abou'])) {

?>

	
	

	<form  action="05-calculation.php" method="POST" class="price" >

		<input type="number"  name="price" placeholder="ENTER PRICE"   >
		<input type="text" name="amount" placeholder="ENTER AMOUNT" ><br>
		<input type="submit" name="select" value="SELECT">
			
	<a href='06-logout.php'><input type="button" name="logout" value="logout"></a>

		</form>
<?php
		echo "<a href='02-handel-login.php'>Welcome page</a><br><br>" ;
	}else{
		
		echo "<script> location.href='01-login.php'</script>";

	
}
?>

</body>
</html>
	






<!-- pattern="\d+" min="0" -->

