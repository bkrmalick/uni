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
							  <li><a href='login.php?". SID ."' >".htmlentities($_SESSION['uname'],ENT_QUOTES,'UTF-8')." | </a></li>";
					}
					else
					{
						echo "<li><a href='login.php?". SID ."' class=$loginactive>Login for Staff</a></li>";
					}
	echo		"</ul>
			</nav>".PHP_EOL;
}

function validateStaffForm(&$clean,&$errors,&$error_found) //function to validate credentials from login page
{
	//-----------------------verifying format of username and password--------------------------------------------------------------
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
		$clean['pword']=htmlentities($_POST['pword'],ENT_QUOTES,'UTF-8');
	}
	else
	{
		$error_found=true;
		$errors['pword']='password invalid';
	}
	
	//-----------------------looking for username and password in config file--------------------------------------------------------------
	
	if(!$error_found) //if no error found in format, check the config file to see if credentials are valid
	{
		$checkUserFlag= checkUser(	$clean['uname'], //only
									$clean['pword'], //these two parameters hold values, rest to be set by checkUser function
									$clean['title'], 
									$clean['fname'], 
									$clean['sname'], 
									$clean['email']);
		
		if($checkUserFlag=='iu') //invalid username
		{
			$error_found=true;
			$errors['uname']='username does not exist';
		}
		elseif($checkUserFlag=='ip')//invalid password
		{
			$error_found=true;
			$errors['pword']='incorrect password';
		}
		elseif($checkUserFlag!= '1') //errors with config file
		{
			$error_found=true;
			echo '<b>error: config file missing or unreadable<b>';
		}
	}
	
	
}

function displayStaffForm($clean,$errors) //(re)display staff login form 
{
	$self = htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES,'UTF-8'); 
	
	
echo	"<form method='post' action='$self?". SID ."' class='center'>
			
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
				
	echo		"<input type='text' name='uname' value='$value' id='uname'/><br>
				<label class='login-error'>$error</label><br>";
				
				$value='';
				$error='';
				if(isset($clean['pword']) && !isset($errors['pword']))	//check for any clean values to retain
				{                         
					$value=$clean['pword'];
				}                         
				if(isset($errors['pword'])) //check for any errors to show
				{
					$error=$errors['pword'];
				}
				
		echo	"<label for='pword'>Password:</label>
				<input type='password' value='$value' name='pword' id='pword'/><br>
				<label class='login-error'>$error</label><br> 
				
				<input type='submit' name='login' value='LOGIN' class='center'/>
			</fieldset>
		
		</form>
		<div  class='center'><p>(NOTE: Both the username and the password are case-sensitive)</p></div>";
}

function displayNewUserForm(&$clean, &$errors) //(re)display admin new user form
{
	$self = htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES,'UTF-8'); 
	
	$title_error='';
	$fname_error='';
	$lname_error='';
	$email_error='';
	$uname_error='';
	$pword_error='';
	
	$title='';
	$fname='';
	$lname='';
	$email='';
	$uname='';
	$pword='';
	
	if(isset($clean['title'])) //check for clean values to redisplay
	{
		$title=$clean['title'];
	}
	elseif(isset($errors['title']))//check for errors to show
	{
		$title_error=$errors['title'];
	}
	else //otherwise show blank input field
	{
		$title_error=' ';
	}
	
	if(isset($clean['fname'])) //repeat for first name
	{
		$fname=$clean['fname'];
	}
	elseif(isset($errors['fname']))
	{
		$fname_error=$errors['fname'];
	}
	else
	{
		$fname_error=' ';
	}
	
	if(isset($clean['lname']))//repeat for last name
	{
		$lname=$clean['lname'];
	}
	elseif(isset($errors['lname']))
	{
		$lname_error=$errors['lname'];
	}
	else
	{
		$lname_error=' ';
	}
	
	if(isset($clean['email'])) //repeat for email
	{
		$email=$clean['email'];
	}
	elseif(isset($errors['email']))
	{
		$email_error=$errors['email'];
	}
	else
	{
		$email_error=' ';
	}
	
	if(isset($clean['uname'])) //repeat for user name
	{
		$uname=$clean['uname'];
	}
	elseif(isset($errors['uname']))
	{
		$uname_error=$errors['uname'];
	}
	else
	{
		$uname_error=' ';
	}
	
	if(isset($clean['pword'])) //repeat for password
	{
		$pword=$clean['pword'];
	}
	elseif(isset($errors['pword']))
	{
		$pword_error=$errors['pword'];
	}
	else
	{
		$pword_error=' ';
	}
	//--------------------Code for retaining title field in new user form---------------------------------
	$title_selected=array();
		
	$title_selected[''     ] ='';
	$title_selected['Mr'   ] ='';
	$title_selected['Mrs'  ] ='';
	$title_selected['Miss' ] ='';
	$title_selected['Sir'  ] ='';
	$title_selected['Dr'   ] ='';
	$title_selected['Lady' ] ='';
	$title_selected['Lord' ] ='';
	
	if(isset($clean['title']))
	{
		$title_selected[$clean['title']]='selected="selected"';	
	}
	elseif(isset($errors['title']))
	{
		$title_error=$errors['title'];
	}
	else
	{
		$title_error=' ';
	}
	
	//-----------------------------Displaying new user form with retained values-----------------------------------------------			
	echo	"<form method='post' action='$self?". SID ."' class='center'>
					<fieldset>
						<legend>Add new user</legend>
					
						<label for='title'>Title: </label>
						<select name='title' id='title'>
							<option value='' ".$title_selected[''].">&nbsp;</option> 
							<option value='Mr' ".$title_selected['Mr'].">Mr</option>
							<option value='Mrs' ".$title_selected['Mrs'].">Mrs</option>
							<option value='Miss' ".$title_selected['Miss'].">Miss</option>
							<option value='Sir' ".$title_selected['Sir'].">Sir</option>
							<option value='Dr' ".$title_selected['Dr'].">Dr</option>
							<option value='Lady' ".$title_selected['Lady'].">Lady</option>
							<option value='Lord' ".$title_selected['Lord'].">Lord</option>
						</select><br><br>
						
						<label for='fname'>First Name: </label>
						<input type='text' id='fname' name='fname' value='$fname'/>
						<label class='error'>$fname_error</label><br>
						
						<label for='lname' >Surname: </label>
						<input type='text' id='lname' name='lname' value='$lname'/>
						<label class='error'>$lname_error</label><br>
						
						<label for='email'>Email: </label>
						<input type='text' id='email' name='email' value='$email'/>
						<label class='error'>$email_error</label><br>
						
						<label for='uname'>Username: </label>
						<input type='text' id='uname' name='uname' value='$uname'/>
						<label class='error'>$uname_error</label><br>
						
						<label for='pword'>Password: </label>
						<input type='text' id='pword' name='pword' value='$pword'/>
						<label class='error'>$pword_error</label><br>
						
						<input type='submit' value='SUBMIT' name='submit'/><br><br>
					</fieldset>
				
				</form>";
}

function validateNewUserForm(&$clean,&$errors,&$errorFlag) //validate admin new user form
{
	if(in_array($_POST['title'],array('Mr','Mrs','Miss','Ms','Sir','Dr','Lady','Lord',''))) //validate and store title
	{
		$clean['title']=htmlentities(trim($_POST['title']),ENT_QUOTES,'UTF-8');
	}
	else
	{
		$errorFlag=true;
		$errors['title']='invalid title';
	}
	
	if(ctype_alpha(trim($_POST['fname']))) //validate first name
	{
		$clean['fname']=htmlentities(ucfirst(strtolower(trim($_POST['fname']))),ENT_QUOTES,'UTF-8');
	}
	elseif(trim($_POST['fname'])=='')
	{
		$errorFlag=true;
		$errors['fname']='first name required';
	}
	else
	{
		$errorFlag=true;
		$errors['fname']='can only include alphabets';
	}
	
	if(ctype_alpha(trim($_POST['lname']))) //validate last name
	{
		$clean['lname']=htmlentities(ucfirst(strtolower(trim($_POST['lname']))),ENT_QUOTES,'UTF-8');
	}
	elseif(trim($_POST['lname'])=='')
	{
		$errorFlag=true;
		$errors['lname']='surname required';
	}
	else
	{
		$errorFlag=true;
		$errors['lname']='can only include alphabets';
	}
	
	if(filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL)) //validate email
	{
		$clean['email']=htmlentities(strtolower(trim($_POST['email'])),ENT_QUOTES,'UTF-8');
	}
	elseif(trim($_POST['email'])=='')
	{
		$errorFlag=true;
		$errors['email']='email required';
	}
	else
	{
		$errorFlag=true;
		$errors['email']='invalid email';
	}
	
	
	if(ctype_alnum(trim($_POST['uname'])) && !userExists(trim($_POST['uname']))) //validate and store username (if doesnt exist already)
	{
		$clean['uname']=htmlentities(trim($_POST['uname']),ENT_QUOTES,'UTF-8');
	}
	elseif(trim($_POST['uname'])=='')
	{
		$errorFlag=true;
		$errors['uname']='username required';
	}
	elseif(userExists(trim($_POST['uname'])))
	{
		$errorFlag=true;
		$errors['uname']='username already exists';
	}
	else
	{
		$errorFlag=true;
		$errors['uname']='username can only be alphanumeric';
	}
	
	if(ctype_alnum($_POST['pword'])) //validate and store password
	{
		$clean['pword']=htmlentities(trim($_POST['pword']),ENT_QUOTES,'UTF-8');
	}
	elseif(trim($_POST['pword'])=='')
	{
		$errorFlag=true;
		$errors['pword']='password required';
	}
	else
	{
		$errorFlag=true;
		$errors['pword']='password can only be alphanumeric';
	}
	
}

function forceRefresh() //force page refresh
{
	header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	header('Pragma: no-cache');
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
	header('Expires: Fri, 06 Jun 1975 15:10:00 GMT');
}

function clearSessCook() //clear session and any related cookies
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
