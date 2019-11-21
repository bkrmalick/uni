<?php
	ob_start(); 
	require 'includes/functions.php';
	forceRefresh();
	session_start();
?>

<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<link rel='stylesheet' type='text/css' href='includes/styles.css'/>
		
		<title>WIPP - P1 Results</title>
	
	</head>
	
	
	
	<body>
		<div class='main-container'>
			<?php 
				require 'includes/header.php'; 
				
				makeNavigation('Intranet');
			?>
		
		<h1>Intranet </h1>
			
		
		<?php
		
			if(isset($_SESSION['plevel']) && $_SESSION['plevel']>0) //if the user is logged in
				{	
					if(is_readable('../../private/PfPresults.html'))
					{
						echo "<ol>
								<li><a href='p1.php?". SID ."'>Web Programming using PHP - P1 Results</a></li>
								<li><a href='dt.php?". SID ."'>Introduction to Database Technology – DT Results</a></li>
								<li><a href='pfp.php?". SID ."'>Problem Solving for Programming – PfP Results</a></li>				
							</ol>";
							
						include '../../private/PfPresults.html'; //show results from private folder
						
					}
					else
					{
						echo "<p class='error'>Error: missing dt file or unreadable</p>";
					}
				}
				else
				{
					echo	"<h3>You are not logged in.</h3> 
							<p>Please log in to access the Intranet.</p>"; //otherwise alert to log in
					
				}
		?>
	
		</div>	
		<?php 
			require 'includes/footer.php';
		
		?>
	</body>



</html>