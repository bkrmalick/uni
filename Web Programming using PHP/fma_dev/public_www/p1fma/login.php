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
				
				makeNavigation('login'); //display navigation with the login page as the active page
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
					
					if(isset($_POST['login'])) //checking if form submitted
					{
						$form_submitted=true;
						
						validateStaffForm($clean,$errors,$error_found); //validating credentials
					}
					
					
					if($form_submitted && !$error_found)
					{
						//sucessful login
						
						session_regenerate_id(true); //regenerate session id to prevent session hijacking 
						$_SESSION['uname']=$clean['uname'];
						$_SESSION['plevel']='staff'; //current permissions level of user
						$_SESSION['title']=$clean['title'];
						$_SESSION['fname']=$clean['fname'];
						$_SESSION['sname']=$clean['sname'];
						$_SESSION['email']=$clean['email'];
						
						header('Location: login.php?'. SID); //refresh page to display logged in status
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
								  <b>Logged in as: ".htmlentities($_SESSION['uname'],ENT_QUOTES,'UTF-8')."</b>
								  <p>".htmlentities($_SESSION['title'],ENT_QUOTES,'UTF-8')." ".htmlentities($_SESSION['fname'],ENT_QUOTES,'UTF-8')." ".htmlentities($_SESSION['sname'],ENT_QUOTES,'UTF-8')."</p>
								  <p>Email: ".htmlentities($_SESSION['email'],ENT_QUOTES,'UTF-8')."</p>
								  <p>Permissions level: ".strtoupper(htmlentities($_SESSION['plevel'],ENT_QUOTES,'UTF-8'))."</p>
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