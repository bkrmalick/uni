<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<title>Timer</title>
	</head>


	<body>
		<?php 
			date_default_timezone_set('Europe/London');
			//echo date_default_timezone_get();
			
			$d=explode(" ",date('d-m-Y h-i',strtotime("+20 day")));
			echo "<p>".$d[0]."</p>".PHP_EOL;
			echo "<p>".$d[1]."</p>".PHP_EOL;
			
			$diff= strtotime("17-04-".date("Y"))-time();
			
			if ($diff < 0 )
			{
				echo "<p>Days until next birthday(next year): ".(strtotime("17-04-".strval(intval(date("Y"))+1))-time())/(24*3600)."</p>".PHP_EOL;
			}
			else
			{
				echo "<p>Days until next birthday(this year):".(strtotime("17-04-".date("Y"))-time())/(24*3600)."</p>".PHP_EOL;
			}
		
			
			
		?>

	</body>
</html>