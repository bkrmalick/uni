<!DOCTYPE html>

<html>
	<head>
		<meta charset='UTF-8'/>
		<title>Control Structures</title>
	</head>


	<body>
		<h1>Arrays, loops, and code re-use</h1>
		<?php
			$n=23;
			$arr=array();
			
			while($n<=42)
			{
				if($n%2==0)
				{
					//echo "<p>$n</p>";
					//echo PHP_EOL;
					
					$arr[]=$n;
				}
				
				$n++;
			}
			
			print_r($arr);
			
		?>
	</body>



</html>