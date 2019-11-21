<?php 
	require_once 'includes/functions.php';
	$nameo = "People"; include 'header.php'; 
?>

		<div class="nav">
		<?php
				
			include 'includes/menu.php';
			 
			 
		?>
		</div>

        <?php echo make_heading(2,"Welcome"); 
		
		if(file_exists("people.txt"))
		{
		
			$handle= fopen("people.txt",'r');
			
			if(!$handle)
			{
				echo "<p>Error: cant open file</p>";
			}
			else
			{
				
			
				while(!feof($handle))
				{
					$line=fgets($handle);
					
					$bline=explode(':',$line);
					
					echo '<p>'.$bline[0].' is '.$bline[1].', is '.$bline[2].' years old and is currently '.trim($bline[3]).'.</p>'.PHP_EOL;
					
				}
			}
		}
		else
		{
			echo "<p>Error: file does not exist</p>";
		}
		
		 include "footer.html";
		?>

	</div>
</body>

</html>
