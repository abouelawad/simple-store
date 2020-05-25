<?php




session_start();


if (isset($_SESSION['abou'])) {

	echo "welcome mr. " . $_SESSION['abou'] . "<br>";

	echo "<a href='04-items.php'>Go Check Items</a><br><br>" ;
	echo "<a href='search-form.php'>search for a Product</a><br>" ;
	echo "<a href='06-logout.php'>logout</a><br>" ;

}else{

		$username = 'abou';
		$password = 'abou';

	if($_POST['username'] == $username  && $_POST['password'] == $password  ){

		$_SESSION['abou'] = $username;

		echo "welcome mr. " . $_SESSION['abou']  . "<br>";
		echo "<a href='04-items.php'>Go Check Items</a><br><br>" ;
		echo "<a href='search-form.php'>search for a Product</a><br>" ;
		echo "<a href='06-logout.php'>logout</a>" ;




		
		// echo "<script>location.href='03-welcome.php'</script>" ; 
	}else{
		

		echo "<script> alert('username or password incorrect!')</script>";

		echo "<script>location.href='01-login.php'</script>";
	}
}