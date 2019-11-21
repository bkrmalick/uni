<?php

require '../../private/config.php'; //getting the config file for credentials

function makeNavigation($activeTab) //function to make the navigation 
{
	$hpactive='none';
	$intraactive='none';
	$adminactive='none';
	$loginactive='none';
	
	if($activeTab=='Homepage')
	{
		$hpactive='active';
	}
	elseif($activeTab=='Intranet')
	{
		$intraactive='active';
	}
	elseif($activeTab=='Admin')
	{
		$adminactive='active';
	}
	elseif($activeTab=='login')
	{
		$loginactive='active';
	}
	
	
	
	echo  	"<nav>
				<ul class='left'>
					<li><a href='index.php?". SID ."' class=$hpactive>Homepage</a></li>   <!-- Echoing SID to ensure session id is maintained --> 
					<li><a href='intranet.php?". SID ."' class=$intraactive>Intranet</a></li> 
					<li><a href='admin.php?". SID ."' class=$adminactive>Admin</a></li>
				</ul>
				
				<ul class='right'>";
					if(isset($_SESSION['uname'])) //if session exists 
					{
						echo "
							  <li><a href='logout.php?". SID ."' >Log Out</a></li>
							  <li><a href='login.php". SID ."' >".htmlentities($_SESSION['uname'],ENT_QUOTES,'UTF-8')." | </a></li>";
					}
					else
					{
						echo "<li><a href='login.php?". SID ."' class=$loginactive>Login for Staff</a></li>";
					}
	echo		"</ul>
			</nav>";
}

function validateStaffForm(&$clean,&$errors,&$error_found) //function to validate credentials
{
	if(isset($_POST['uname']) && !ctype_space($_POST['uname']) && $_POST['uname']!='') //checking if username was entered
	{
		if(ctype_alnum(trim($_POST['uname']))) //checking if it was in correct format
		{
			$clean['uname']=htmlentities(trim($_POST['uname']),ENT_QUOTES,'UTF-8');
		
		}
		else
		{
			$error_found=true;
			$errors['uname']='username invalid';
		}
	}
	else
	{
		$error_found=true;
		$errors['uname']='username required';
	}
	
	if(isset($_POST['pword']) && (ctype_space($_POST['pword']) || $_POST['pword']=='')) //checking if password missing
	{
		$error_found=true;
		$errors['pword']='password required';
	}
	elseif(isset($_POST['pword']) && ctype_alnum(trim($_POST['pword']))) //checking if password in correct format(incorrect format will not be revealed to user in case  of passwords)
	{
		$clean['pword']=htmlentities(trim($_POST['pword']),ENT_QUOTES,'UTF-8');
	}
	else
	{
		$error_found=true;
		$errors['pword']='password invalid';
	}
	
	if(!$error_found) //if no error found in format, check the config file to see if credentials are valid
	{
		if( checkUser($clean['uname'],$clean['pword']) =='iu') //invalid username
		{
			$error_found=true;
			$errors['uname']='username does not exist';
		}
		elseif(checkUser($clean['uname'],$clean['pword']) =='ip')//invalid password
		{
			$error_found=true;
			$errors['pword']='incorrect password';
		}
		elseif(checkUser($clean['uname'],$clean['pword']) != '1' ) //errors with config file
		{
			$error_found=true;
			echo '<b>error: config file missing or unreadable<b>';
		}
	}
	
	
}

function displayStaffForm($clean,$errors) //(re)display form 
{
	$self = htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES,'UTF-8'); 
	
	
echo	"<form method='post' action='$self' class='center'>
			
			<fieldset>
			
				<legend>Staff Member</legend>
				
				
				<label for='uname'>Username:</label>";
				
				$value='';
				$error='';
				
				
				if(isset($clean['uname'])) //check for any clean values to retain
				{
					$value=$clean['uname'];
				}
				if(isset($errors['uname'])) //check for any errors to show
				{
					
					$error=$errors['uname'];
				}
				
		echo	"<input type='text' name='uname' value='$value' id='uname'/><br><br>
				<label class='login-error'>$error</label> 
				";
				
				$value='';
				$error='';
				if(isset($clean['pword']))
				{
					$value=$clean['pword'];
				}
				if(isset($errors['pword']))
				{
					$error=$errors['pword'];
				} 
				
				//password will never be retained for security purposes
				
		echo	"<label for='pword'>Password:</label>
				<input type='password' value='$value' name='pword' id='pword'/>
				<br><br><input type='submit' name='login' value='LOGIN'/>
				<label class='login-error'>$error</label> 
			
			</fieldset>
		
		</form>
		<div  class='center'><p>(NOTE: Both the username and the password are case-sensitive)</p></div>";
}

function forceRefresh()
{
	header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	header('Pragma: no-cache');
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
	header('Expires: Fri, 06 Jun 1975 15:10:00 GMT');
}

function clearSessCook() //clean session data
{	
	$_SESSION = array();
	
	if (ini_get("session.use_cookies")) 
	{
	 $past = time() - (24 * 60 * 60 * 2);
	 $params = session_get_cookie_params();
	 setcookie(session_name(), '',$past,$params["path"], $params["domain"],$params["secure"], $params["httponly"]);
	
	}
	
	session_unset();
	session_destroy();
}

?>
