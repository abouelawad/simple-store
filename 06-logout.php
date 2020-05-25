<?php

session_start();

if (isset($_SESSION['abou'])) {

	session_destroy();

	echo "<script> location.href='01-login.php'</script>";
}else{

	echo "<script> location.href='01-login.php'</script>";
}

