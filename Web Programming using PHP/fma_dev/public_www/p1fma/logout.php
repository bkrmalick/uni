<?php
	//logout page
	session_start();
	
	$_SESSION['logout']=true;
	
	include 'index.php'; //"redirect" to index page
?>

