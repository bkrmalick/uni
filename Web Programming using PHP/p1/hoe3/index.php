<!DOCTYPE html>

<html>
	<head>
		<meta charset='utf-8'/>
		<title>Titlino</title>
	</head>

	<body>
	
	<?php
		$x=rand(0,1);
		if($x)
		{
			echo 'PHP'.'Begins'.'Now';
		}
		else
		{
			echo '<h1>PHP halted until further notice</h1>';
		}
		
		
		echo $x ? '<p>evaluated ? true</p>': '<p>evaluated ? false</p>';
			
	
	?>

	</body>

</html>