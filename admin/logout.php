<?php 
	require('./../config/root_url.php');
		
	unset($_SESSION['userName']); // delete one user
	//session_destroy() // Delete everything;
	
	header('Location: login.php');
?>