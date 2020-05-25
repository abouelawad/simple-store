<?php


session_start();

if (isset($_SESSION['abou'])) {
	echo "welcome page";

	echo "<a href='06-logout.php</a>";

}else{
	echo "not welcome" ;
}



	