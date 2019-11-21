


<?php 
	require_once 'includes/functions.php';
	$nameo = "home"; 
	include 'header.php'; 

?>

		<div class="nav">
			 <?php
				
				include 'includes/menu.php';
			 
			 
			 ?>
			 
		</div>
		
        <?php
			$title='   tHe Last & fiNal crusade';
			$id='AN.454453';
			
			//echo $title;
			//echo PHP_EOL;
			
			
			
			echo "<p>".format_title($title)."</p>";
			
			/* $delim=array("/",".","-");
			
			$id=str_replace($delim, "/",$id);
			*/
			$id_broken=id_valid($id); 
			
			
			$prefix = $id_broken[0];
			$suffix = $id_broken[1];
			
			echo PHP_EOL;
			echo "<p>";
			echo "prefix: $prefix
				  suffix: $suffix";
			echo "</p>";
			
			$ids=array('AA-2365','A1-2365', 'AA-2&65');
			
			foreach($ids as $idc)
			{
				
				if(!id_valid($idc))
				{
					echo "<p>id: ".str_replace("/","-",$idc)." is invalid</p>";
				}
				else
				{
					echo "<p>id: ".str_replace("/","-",$idc)." is valid</p>";
				}
				
			}
			
			
		?>
        
		<?php
		 include "footer.html";
		?>

	</div>
</body>

</html>