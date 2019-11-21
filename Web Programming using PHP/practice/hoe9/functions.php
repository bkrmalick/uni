<?php

function displayForm($errors, $clean)
{
	$self=$_SERVER['PHP_SELF'];
	
	if(isset($clean['text']))
	{
		$text=$clean['text'];
	}
	else
	{
		$text='';
	}
	
	if(isset($clean['select']))
	{
		$select=$clean['select'];
		
		if($select == '1')
		{
			$select2='';
			$select1="selected='selected'";
		}
		else
		{
			$select2="selected='selected'";
			$select1='';
		}
	}
	else
	{
		$select1='';
		$select2='';
	}
	
	
	echo 	"<form method='POST' action='$self'>
				<label for='text'>Input Text Below:</label>
				<input type='text' value='$text' name='text' id='text'/> ";
				
				
				
				if(isset($errors['text']))
				{
					$tmp=$errors['text'];
					echo "<label>$tmp</label>";
				}
				
	echo			"<br><label for='select'>Select curse</label>
				<select name='select' id='select'>
					<option value='1' $select1 >Puta Madre</option>
					<option value='2' $select2>Mierda</option>
				</select> ";
				if(isset($errors['select']))
				{
					$tmp=$errors['select'];
					echo "<label>$tmp</label>";
				}
				
	echo     	"<br><input type='submit' value='submit' name='submit'/>
			
			</form>
		";
	
}

function validateData(&$errors, &$clean, &$error)
{
		
		if(isset($_POST['text']))
		{
			if(strlen(trim($_POST['text']))<=3)
			{
				$clean['text']=trim($_POST['text']);
			}
			else
			{
				$errors['text']='longer than 3';
				$error=true;
			}
			
		}
		else
		{
			$errors['text']='text not set';
			$error=true;
		}
		
		if(isset($_POST['select']))
		{
			if(in_array(trim($_POST['select']),array('1','2')))
			{
				$clean['select']=trim($_POST['select']);
			}
			else
			{
				$errors['select']='select not chosen from list';
				$error=true;
			}
			
		}
		else
		{
			$errors['select']='select not set';
			$error=true;
		}
}


function displayData($clean)
{
	$tmp=$clean['text'] ;
	echo "<p>Valid Text: $tmp</p>";
	$tmp=$clean['select'] ;
	echo "<p>Valid Select: $tmp </p>";
}
?>
