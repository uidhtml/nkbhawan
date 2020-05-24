<?php
	
	//server datatbase connection
	//$host = 'localhost';
	//$username = 'uidhtmlc_new';
    //$password = 'Kingbadshah@12';
	//$db = 'uidhtmlc_new';

	//local datatbase connection
	$host = 'localhost';
	$dbUsername = 'root';
	$dbPass = '';
	$db = 'nkbhavan';
	
	$con = mysqli_connect($host,$dbUsername,$dbPass,$db) or die('Connection error'.mysqli_connect_error());
?>