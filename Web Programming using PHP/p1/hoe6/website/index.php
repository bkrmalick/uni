
<?php 
	require_once 'includes/functions.php';

	$nameo = "home"; 
	include 'header.php'; 
	
?>

		<div class="nav">
			<!-- Start menu 
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="people.php">People</a></li>
				<li><a href="weather.php">Weather</a></li>
			</ul> 
			
			
			
			 End menu -->
			 
			 <?php
				
				include 'includes/menu.php';
			 
			 
			 ?>
			 
		</div>
		
        <?php
			$links =array	("http://www.php.net/manual/en/index.php"=>"PHP Manual",
							"http://moodle.bbk.ac.uk/"=>"Moodle",
							"http://www.bbk.ac.uk/mybirkbeck/"=>"Birkbeck");
							
			echo make_menu($links);
			
			echo "<p>";
			echo mult(5,2);
			echo "</p>";
			
			echo "<p>";
			echo mult(1,2);
			echo "</p>";
			
			echo make_heading(1,"Hi mY nA1mE iS AbU");
			echo make_heading(2,"Hi mY nA2mE iS AbU");
			echo make_heading(3,"Hi mY nA3mE iS AbU");
		
		?>
		
		<?php
		 include "footer.html";
		?>

	</div>
</body>

</html>
