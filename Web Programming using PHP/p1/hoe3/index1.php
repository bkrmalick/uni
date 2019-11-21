<!DOCTYPE html>

<html lang='en'>
	<head> 
		<meta charset='utf-8'/>
		<title>Tyler</title>
		
	
	</head>

	<body>
	
	<?php
		
		$a = 8;
		$b = 14;
		
		$x1=$a+$b; // 22
		$x2 = $a-$b; //-6
		$x3 =$b-$a*$a; //-50
		$x4 =$b % $a; //6
		$x5 =$b/$a; //1.75
		
		echo "<p>$x1</p>";
		echo "<p>$x2</p>";
		echo "<p>$x3</p>";
		echo "<p>$x4</p>";
		echo "<p>$x5</p>"; 
		
		echo '<h1>------------</h1>';
		
		$c='This ';
		$d='class';
		
		$a+=$b; 
		echo '<p>';
		echo "$a"; //22
		echo '</p>';
		$a -= $b;
		echo '<p>';
		echo "$a"; //8
		echo '</p>';
		$a=$a.$b;
		echo '<p>';
		echo "$a";//814
		echo '</p>';
		$c.=$d;
		echo '<p>';
		echo "$c"; //This class
		echo '</p>';
		
		echo '<h1>------------</h1>';
		
		$a=5;
		$b=6;
		
		echo '<p>Pre-increment $a: '.++$a.'</p>'; //6
		echo '<p>Post-increment $b: '.$b++.'</p>'; //6
		echo "<p>Current values, \$a= $a and \$b = $b </p>"; 
		
		

	
	
	?>
	
	</body>

</html>