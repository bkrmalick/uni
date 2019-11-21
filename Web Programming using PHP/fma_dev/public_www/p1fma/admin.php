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

			
			
			echo "<h1>Admin</h1>".PHP_EOL;
			
			if(isset($_SESSION['plevel']) && ($_SESSION['plevel']== 'admin') ) //if logged in as admin
			{
				//display and process new user form
				
				$clean=array();
				$errors=array();
				
				$form_submitted=false;
				$errorFlag=false;
				
				if(isset($_POST['submit'])) //if new user form submitted
				{
					$form_submitted=true;
					
					validateNewUserForm($clean,$errors,$errorFlag);
				}
				
				if($form_submitted && !$errorFlag)
				{
					$add_flag=addUser($clean['uname'],$clean['pword'], $clean['title'], $clean['fname'], $clean['lname'], $clean['email']);
					
					if($add_flag=='-1')
					{
						echo "<p class='error'>error: unable to open config file</p>".PHP_EOL;
					}
					elseif($add_flag=='-2')
					{
						echo "<p class='error'>error: config file missing or insufficient permissions</p>".PHP_EOL;
					}
					elseif($add_flag=='-3')
					{
						echo "<p class='error'>error: cannot write to config file</p>".PHP_EOL;
					}
					else
					{
						//display success box showing details of new added user
						
						echo	"<form method='post' action='admin.php?". SID ."' class='center'>
									<fieldset>
										<legend class='success-message'>Success!</legend>
									
										<label>".$clean['title'].' '.$clean['fname'].' '.$clean['lname']."</label><br>
										
										<label>".$clean['email']."</label><br>
										
										<label>".$clean['uname']."</label><br>
										
										<input type='submit' value='OK' name='OK' class='center'/><br><br>
									</fieldset>
								
								</form>";
					}
				}
				else
				{
					//(re)display new user form
					
					if($_SESSION['uname']!='Staff Admin')
					{
						echo "<p class='success-message'>Your permissions have temporarily been increased to admin. </p>".PHP_EOL;
					}
					else
					{
						echo "<p class='success-message'>You have temporarily been logged in as Staff Admin. </p>".PHP_EOL;
					}
					
					echo "<p>Enter the following details to register a new staff member: </p>".PHP_EOL;
					
					
					displayNewUserForm($clean,$errors);
				}
			}
			else 
			{
				//ask for admin password if not logged in as admin
				
				$errorFlag=false;
				$error='';
				$form_submitted= isset($_POST['login']);
				
				if($form_submitted)
				{
					if(checkAdminUser($_POST['adminpass'])== true) //check password
					{
						session_regenerate_id(true);
					
						if(!isset($_SESSION['uname'])) //if not logged in already
						{
							$_SESSION['uname']='Staff Admin'; //log in as default admin
							$_SESSION['plevel']='admin';
							$_SESSION['title']= 'Lord';
							$_SESSION['fname']='Default';
							$_SESSION['sname']='Admin';
							$_SESSION['email']= 'admin@admin.com';
						}
						else
						{
							$_SESSION['plevel']='admin'; //otherwise just increase permissions to admin
						}
						
						header('Location: admin.php?'. SID);//refresh page
						exit;
					}
					elseif($_POST['adminpass']=='')
					{
						$errorFlag=true;
						$error='password required';
					}
					else
					{
						$errorFlag=true;
						$error='incorrect password';
					}
				}
				
				if(!$form_submitted || $errorFlag)
				{
					$self = htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES,'UTF-8'); 
				
					echo "<p>Enter the admin password to continue.</p>
						 <form method='post' action='$self?". SID ."' class='center'>
							<fieldset>
								<legend>Password</legend>
								<input type='password' name='adminpass' id='adminpass' class='admin-input'/><br><br>";
								
								if($errorFlag)
								{
									echo "<label class='error'>$error</label><br><br>";
								}
								
					echo "		<input type='submit' name='login' value='LOGIN' class='admin-input'/>
							</fieldset>
						 </form>";
				}
			}
			
			?>
			
			
		</div>	
		<?php 
			require 'includes/footer.php'; 
		?>
	</body>



</html>