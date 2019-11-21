<?php
	//script to display contents of cookies and session arrays
	session_start();
	
	echo '<h1>$_SESSION CONTENTS:</h1>';
	print_r($_SESSION);
	echo '<h1>$_COOKIE CONTENTS:</h1>';
	print_r($_COOKIE);


?>

