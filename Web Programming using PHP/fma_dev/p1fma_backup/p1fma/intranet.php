<?php 
	require 'includes/functions.php';
	session_start();
	forceRefresh();
?>

<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<link rel='stylesheet' type='text/css' href='includes/styles.css'/>
		
		<title>WIPP - Intranet</title>
	
	</head>
	
	
	
	<body>
		<div class='main-container'>
			<?php 
			require 'includes/header.php';

			makeNavigation('Intranet'); //make the navigation with the intranet as the active page

			?>
			
			
			
			<h1>Intranet</h1>
			
			<?php
			
				if(isset($_SESSION['plevel']) && $_SESSION['plevel']>0) //if the user is logged in
				{
				
					echo	"<h3>Welcome to the WIPP Intranet!</h3>
							<p>Click on any one of the links below to see the results. </p>
							
							<ol>
								<li><a href='p1.php?". SID ."'>Web Programming using PHP - P1 Results</a></li>
								<li><a href='dt.php?". SID ."'>Introduction to Database Technology – DT Results</a></li>
								<li><a href='pfp.php?". SID ."'>Problem Solving for Programming – PfP Results</a></li>
							
							</ol>";
				}
				else
				{
					echo	"<h3>You are not logged in.</h3>
							<p>Please log in to access the Intranet.</p>";
					
				}
			?>
			
		</div>	
		<?php 
			require 'includes/footer.php'; 
		?>
	</body>



</html>