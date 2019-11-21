


<?php $nameo = "home"; include 'header.php'; ?>

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
			
			$title=trim(htmlentities(ucfirst(strtolower($title))));
			
			echo "<p>$title</p>";
			
			$delim=array("/",".","-");
			
			$id=str_replace($delim, "/",$id);
			
			$id_broken=explode("/",$id);
			
			
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
				$idc=str_replace($delim, "/",$idc);
			
				$id_brokenc=explode("/",$idc);
				
				$prefix = $id_brokenc[0];
				$suffix = $id_brokenc[1];
				
				if(ctype_alpha($prefix) AND ctype_digit($suffix))
				{
					echo "<p>id: $idc is valid</p>";
					
					
				}
				else
				{
					echo "<p>id: $idc is invalid</p>";
					
			
				}
				
			}
			
			
		?>
        
		<?php
		 include "footer.html";
		?>

	</div>
</body>

</html>