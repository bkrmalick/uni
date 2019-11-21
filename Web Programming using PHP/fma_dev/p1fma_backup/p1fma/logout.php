<?php
	//script to clear session and redirect to home page
	session_start();
	
	$_SESSION['logout']=true;
	
	include 'index.php'; //"redirect" to index page
?>

