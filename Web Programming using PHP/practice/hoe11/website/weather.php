<?php 
	require_once 'includes/functions.php';
	$nameo="Weather";
	include 'includes/header.php'; 
	
?>
		
		<div class="nav">
		<?php
				
			include 'includes/menu.php';
			 
			 
		?>
		</div>
		
       <?php
			echo make_heading(2,"Welcome"); 
	   
			
			
			if(!(is_dir("data") ))
			{
				echo "<p>Error: Data directory does not exist</p>";
			}
			
			else
			{
				$handle=opendir("data");
				
				$file=readdir($handle);
				
				$files=array();
				
				do
				{
					if(is_file("data/".$file))
					{
						$nameFile=(explode('.',$file))[0];
						//$files=array();
						
						//echo '<p>'.$file.'</p>';
						
						//echo make_heading(1,$nameFile);
						
						$handle_file=fopen("data/".$file,"r");
						
						if(!$handle_file)
						{
							echo "<p>Error: cant open file</p>";
						}
						
						else
						{
							while(!feof($handle_file))
							{
								$line=fgets($handle_file);
								$day=trim(explode(':',$line)[0]);
								$files["$day"]["$nameFile"]=trim(explode(':',$line)[1]);
								
								//echo '<p>'.trim($line).'</p>'.PHP_EOL;
							}
						}
					}
					
					$file=readdir($handle);
					
				}while($file);
				
				
				
				echo "<table>";
				echo "<tr>"."<th>Day</th>";
				foreach($files["Monday"] as $x=>$value)
				{
					echo "<th>$x</th>";
				}
				echo "</tr>";
				
				foreach($files as $day => $value)
				{
					echo "<tr>";
					echo "<td>$day</td>".PHP_EOL;
					foreach($value as $att)
					{
						echo "<td>$att</td>".PHP_EOL;
					}
					echo "</tr>";
				}
				
				echo "</table>";
			}
	   
	  
			include "includes/footer.php";
		?>

	</div>
</body>

</html>
