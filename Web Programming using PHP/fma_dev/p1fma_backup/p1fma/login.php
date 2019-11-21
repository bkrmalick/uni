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
		
		<title>WIPP - Login Staff</title>
	
	</head>
	
	
	
	<body>
		<div class='main-container'>
			<?php 
				require 'includes/header.php'; 
				
				makeNavigation('login');
			?>
		
		
			<?php
				
				if(!isset($_SESSION['uname'])) //if session does not exist 
				{
				
					echo "<h1>Login</h1>
					<p>Please use the WIPP credentials provided to you by the system administrator.</p>";
					
					$error_found=false;
					$form_submitted=false;
					$errors=array();
					$clean=array();
					
					if(isset($_POST['login']))
					{
						$form_submitted=true;
						
						validateStaffForm($clean,$errors,$error_found); //validating credentials
					}
					
					
					if($form_submitted && !$error_found)
					{
						//sucessful login
						
						echo '<h1>SUCESS!<h1>';
						
						session_regenerate_id(true);
						$_SESSION['uname']=$clean['uname'];
						$_SESSION['plevel']='1'; //current permissions level of user. 1 for user, 2 for admin.
						
						header('Location: login.php'); //refresh apge ti display logged in status
						exit;
						
					}
					else
					{
						displayStaffForm($clean,$errors); //redisplay form with errors if any
						
					}
				}
				else //session exists - display user thats logged in
				{
					echo "<h1>Login</h1>
							  <form class='center'>
								  <fieldset>
								  <legend>Logged In</legend>
								  <p>You are currently logged in as: ".htmlentities($_SESSION['uname'],ENT_QUOTES,'UTF-8')."</p>
								  <p>You have permissions level: ".htmlentities($_SESSION['plevel'],ENT_QUOTES,'UTF-8')."</p>
								  </fieldset>
							  </form>";
							  
					echo "<a href='logout.php?". SID ."'  id='logout-button' class='center'>LOG OUT</a>";
				}
			?>
	
		</div>	
		<?php 
			require 'includes/footer.php';
		
		?>
	</body>



</html>