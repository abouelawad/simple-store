<?php

session_start();

if (isset($_SESSION['abou'])) {


	$products=array("tshirt"=>200 ,
	 "shirt"=>80 ,
	  "pantalon"=>220 ,
	   "shoes"=>120 ,
	    "short"=>90 ,
	     "jacket"=>60 ,
	      "glasses"=>80 ,
	       "sunglasses"=>100);



	$searchWord = $_POST['search'];

	$keys = array_keys($products);

	if (in_array( $searchWord , $keys)){

		echo "the " .$searchWord . " price is " .  $products[$searchWord] . " $<br>" ;
		echo "<a href='search-form.php'> search more products</a><br>";
		echo "<a href='04-items.php'> check out $$</a>";

	}else{
			echo " Sorry the " . $searchWord . " is not avalable <br>";

	?>

		<a href="search-form.php"><input type="button" name="back" value="search more products"></a>

<?php
}
}else{

	echo "<script>location.href='01-login.php'</script>";
}
	
	
	
?>



<!-- // $matches = array();

// foreach($products as $items=>$price) {
//     if(preg_match("/\b$searchWord\b/i", $price)) {
//         $matches[$items] = $price;
//     }
// }
	
// } -->







