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
		
		<title>WIPP - Admin</title>
	
	</head>
	
	
	
	<body>
		<div class='main-container'>
			<?php 
			require 'includes/header.php';

			makeNavigation('Admin'); //make the navigation with the admin as the active page

			?>
			
			
			
			<h1>Admin</h1>
			<h3>Coming soon...</h3>
			
			
			
		</div>	
		<?php 
			require 'includes/footer.php'; 
		?>
	</body>



</html>