<?php session_start();

	if ($_SESSION['user_id']) {
		unset($_SESSION['user_id']);
		session_destroy();
		header('location:index.php');
	} else {
		header('location:index.php');
	}
	
 ?>