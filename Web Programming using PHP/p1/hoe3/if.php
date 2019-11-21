<!DOCTYPE html>

<html lang='en'>
	<head> 
		<meta charset='utf-8'/>
		<title>Tyler</title>
		
	
	</head>

	<body>
	
	<?php
		$a = 3;
		$b = 4;
		$c = '4';
		$d = 'My String';
		$e = 'Not My String';
		
		if($a!=$b)
		{
			echo '<p>a does not equal to b</p>';
		}
		else
		{
			echo '<p>a equals b</p>';
		}
		
		if($a==$b)
		{
			echo '<p>a is equal to b</p>';
		}
		else
		{
			echo '<p>a does not equal b</p>';
		}
		if($c==$b)
		{
			echo '<p>c equals to b</p>';
		}
		else
		{
			echo '<p>c does not equal to b</p>';
		}
		if($c===$b)
		{
			echo '<p>c and b are both equal and of same type</p>';
		}
		else
		{
			echo '<p>c and b are not equal or are not of same type</p>';
		}if($a<$b)
		{
			echo '<p>a is less than b</p>';
		}
		else
		{
			echo '<p>a is greater than or equal to b</p>';
		}
		if($e>$d)
		{
			echo '<p>e is greater than d</p>';
		}
		else
		{
			echo '<p>e is less than or equal to d</p>';
		}
		if(($c-$b)!=0)
		{
			echo '<p>difference between c and b is not zero</p>';
		}
		else
		{
			echo '<p>difference between c and b is 0</p>';
			
		}
		
		echo '<h1>------------------</h1>';
		
		$x=5;
		$y=8;
		$z=10;
		
		if($x<$y and $z>$x)
		{
			echo '<p>x is less than y and z is greater than x</p>'; //print
		}
		else
		{
			echo '<p>x is greater than or equal to y or z is less than or equal to x</p>';
		}
		
		if($z>$y XOR $y>$x)
		{
			echo '<p>1</p>';  
		}
		else
		{
			echo '<p>2</p>';
		}
		
		if (!($x>$z))
		{
			echo '<p>3</p>';
		}
		else
		{
			echo '<p>4</p>';
		}
		
		if (!($x<$z))
		{
			echo '<p>5</p>';
		}
		else
		{
			echo '<p>6</p>';
		}
		
		if($z > $x || $x>$y)
		{
			echo '<p>7</p>';
		}
		else
		{
			echo '<p>8</p>';
		}
		/*
		1
		3
		6
		7
		*/
		echo '<h1>------------------</h1>';
		
		$a=rand(1,3);
		$b=rand(1,3);
		
		echo "<h2>a=$a, b=$b</h2>";
		
		echo '<p>';
		if($a>$b)
		{
			echo 'a is greater than b';
		}
		elseif ($a<$b)
		{
			echo 'a is less than b';
		}
		else
		{
			echo 'a is equal to b';
		}
		echo '</p>';
	
	
	
	?>
	
	</body>

</html>