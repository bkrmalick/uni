<?php
				$arr['index.php']='Bkr';
				$arr['people.php']='People';
				$arr['weather.php']='Weather';
				
				echo '<ul>';
				foreach($arr as $key => $value)
				{
					echo "<li><a href=\"$key\">$value</a></li>";
					echo PHP_EOL;
				}
				echo '</ul>';
?>