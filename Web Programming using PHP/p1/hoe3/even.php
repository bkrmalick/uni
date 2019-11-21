<!DOCTYPE html>

<html lang='en'>
	<head> 
		<meta charset='utf-8'/>
		<title>Tyler</title>
		
	
	</head>

	<body>
	
	<?php
		
		
		echo '<h1>------------------</h1>';
		$number = rand(0,10); 
		
		echo "<h1>$number </h1>";
		
		if ((($number % 2)==0))
		{
			echo "<p>even</p>";
		}
		else
		{
			echo "<p>odd</p>";
		}
	
	?>
	
	</body>

</html>