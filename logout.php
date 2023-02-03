<?php 
if (isset($_GET['logoutid'])) {
	session_start();

	session_unset();
	session_destroy();
	// var_dump($_SESSION);
	   header("Location: aflogin.php");

}

 ?>