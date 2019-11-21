<?php

function addUser($username,$password, $title, $fname, $sname, $email) //add new user to config file
{
	$file_path='../../private/config.txt';
		
	if(is_readable($file_path) && is_writable($file_path))
	{
	
		$handle=fopen($file_path,'a'); 
		
		if($handle)//check if file opened 
		{
			fwrite($handle,PHP_EOL .$username.','.$password.','.$title.','.$fname.','.$sname.','.$email); //writing whole line to config file
			
			if($handle)
			{
				return '1'; //success
			}
			else
			{
				return '-3'; //error during writing to config file
			}
			
			fclose($handle);
		}
		else
		{
			return '-1'; //unable to open config file
		}
	}	
	else
	{
		return '-2'; //config file missing or missing req permission
	}
}

function checkUser($username,$password, &$title, &$fname, &$sname, &$email) //byref parameters to be set on successfull credential validation
{
	$validCreds=array(); //2D array to store data read from config file
	$file_path='../../private/config.txt';
	
	if(is_readable($file_path))
	{
	
		$handle=fopen($file_path,'r');
		
		if($handle!=false)//check if file opened 
		{
			while(!feof($handle)) //loop to read and load all data into $validCreds array for easier validation
			{
				$cred=fgets($handle); //gets first line in config file
				
				$cred_array=explode(',',$cred); //explode to produce array of user data
				
				$validCreds[trim($cred_array[0])]['pword']=trim($cred_array[1]); //array[user]['pword']=password
				$validCreds[trim($cred_array[0])]['title']=trim($cred_array[2]); //array[user]['title']=title
				$validCreds[trim($cred_array[0])]['fname']=trim($cred_array[3]); //array[user]['fname']=first name
				$validCreds[trim($cred_array[0])]['sname']=trim($cred_array[4]); //array[user]['sname']=surname
				$validCreds[trim($cred_array[0])]['email']=trim($cred_array[5]); //array[user]['email']=email
			}
			
			fclose($handle);
			
			if(!isset($validCreds[$username]))//check if username exists (username is case sensitive, so must be exact) 
			{
				return 'iu'; //invalid username
				
			}
			elseif($validCreds[$username]['pword']!=$password)
			{
				return 'ip'; //invalid password
					
			}
			else
			{
				//creds ok, set parameters
				
				$title=$validCreds[$username]['title'];
				$fname=$validCreds[$username]['fname'];
				$sname=$validCreds[$username]['sname']; 
				$email=$validCreds[$username]['email'];
				
				return '1';//success
			}
			
			
		}
		else
		{
			return '-1'; //unable to open config file
		}
	}	
	else
	{
		return '-2'; //config file missing or not readable
	}
	
}

function userExists($username) //check if user already exists
{
	$username=trim($username);
	$usernames=array(); 
	
	$file_path='../../private/config.txt';
	
	if(is_readable($file_path))
	{
		$handle=fopen($file_path,'r');
		
		if($handle!=false)//check if file opened 
		{
			while(!feof($handle)) //loop to read and load all usernames into $usernames array
			{
				$cred=fgets($handle); //gets first line in config file
				
				$cred_array=explode(',',$cred); //array of user data
				
				$usernames[]=trim($cred_array[0]);
	
			}
			
			fclose($handle);
			
			if(in_array($username, $usernames) )//check if username exists (username is case sensitive, so must be exact) 
			{
				return '1'; //exists already
				
			}
			else
			{
				return '0'; //does not exist
			}
		}
		else
		{
			return '-1'; //unable to open config file
		}
	}	
	else
	{
		return '-2'; //config file missing or not readable
	}
	
}

function checkAdminUser($password) //check password for admin user
{
	if($password=='DCSadmin01')
	{
		return true;
	}
	
	return false;
}



?>