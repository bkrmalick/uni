<!DOCTYPE html>

<html lang='en'>
	<head> 
		<meta charset='utf-8'/>
		<title>Tyler</title>
		
	
	</head>

	<body>
	
	<?php
		
		
		echo '<h1>------------------</h1>';
		$x=0;
		$x =rand(0,2);
		
		if($x==0)
		{
			$name="Stuart";
		}
		elseif ($x==1)
		{
			$name="Fred";
		}
		else
		{
			$name="bkr";
		}
		
		switch($name)
		{
			case("Stuart"):
				echo '<p>Welcome Stuart!</p>';
				break;
			case("Fred"):
				echo '<p>Welcome Fred!</p>';
				break;
			default:
				echo '<p>Welcome stranger!</p>';
		}		
	
	
	
	?>
	
	</body>

</html>