<?php

function addUser($username, $password)
{
	
}

function checkUser($username,$password)
{
	$validCreds=array();
	$file_path='../../private/config.txt';
	
	if(is_readable($file_path))
	{
	
		$handle=fopen($file_path,'r');
		
		if($handle!=false)//check if file opened 
		{
			while(!feof($handle)) //to read and load all usernames and passwords into an array for easier validation
			{
				$cred=fgets($handle); //gets "username,password"
				
				$cred_array=explode(',',$cred); //array of username and password
				
				$validCreds[trim($cred_array[0])]=trim($cred_array[1]); //array[username]=password
			}
			
			fclose($handle);
			
			if(!isset($validCreds[$username]))//check if username exists (username is case sensitive) 
			{
				return 'iu'; //invalid username
				
			}
			elseif($validCreds[$username]!=$password)
			{
				return 'ip'; //invalid password
					
			}
			else
			{
				return '1'; //successful login
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




?>