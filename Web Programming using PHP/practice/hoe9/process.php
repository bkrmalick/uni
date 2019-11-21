<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Form processing page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        
		
        <?php
		
		$data= array();
		$errors=array();
		
		$form_submitted=False;
		$error=False;
		
		if(isset($_POST['submit']))
		{
			$form_submitted=True;
			
		
			if(isset($_POST['name']) && strlen($_POST['name'])<=10 && strpos(trim($_POST['name'])," ")!=False)
			{
				#$name=trim($_POST['name']);
				#echo '<p>NAME: '.htmlentities($name).'</p>';
				
				$data['name']=htmlentities(trim($_POST['name']));
			}
			else
			{
				#echo '<p>NAME: INVALID</p>';
				$errors['name']='Name is not valid';
				
				$error=True;
				$form_submitted=False;
			}
			
			 if(isset($_POST['email']) && filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL))
			{
				#$email=trim($_POST['email']);
				#echo '<p>EMAIL: '.htmlentities($email).'</p>';
				
				$data['email']=htmlentities(trim($_POST['email']));
			}
			else
			{
				#echo '<p>EMAIL: INVALID</p>';
				$errors['email']='Email is not valid';
				$error=True;
				$form_submitted=False;
			}
			
			 if(isset($_POST['format']) && in_array($_POST['format'],array('plain','html')))
			{
				#$format=$_POST['format'];
				#echo '<p>FORMAT: '.htmlentities($format).'</p>';
				
				$data['format']=htmlentities(trim($_POST['format']));
			}
			else
			{
				#echo '<p>FORMAT: INVALID</p>';
				
				$errors['format']='Format is not valid';
				$error=True;
				$form_submitted=False;
			}
			
			 if(isset($_POST['tac']) && $_POST['tac']=="yes" )
			{
				#$tac=$_POST['tac'];
				#echo '<p>TAC Checkbox: '.htmlentities($tac).'</p>';
				
				$data['tac']=htmlentities(trim($_POST['tac']));
			}
			else
			{
				#echo '<p>TAC Checkbox: INVALID</p>';
				
				$errors['tac']='TAC Checkbox is not valid';
				$error=True;
				$form_submitted=False;
			}
		
		}
		
		if($errors==False && $form_submitted==True)
		{
			echo "<h1>Data from the form:</h1>";
			//data processing 
			foreach($data as $field=>$value)
			{
				echo "<p>$field : $value</p>";
			}
			
			foreach($errors as $field=>$error)
			{
				echo "<p>$field : $error</p>";
			}
        
		}
		else
		{
			echo "<h1>Re enter Data:</h1>".PHP_EOL;
		
		echo 
		 '<form action="'.htmlentities($_SERVER['PHP_SELF']).'"method="post">
            <fieldset>
			<legend>Sign Up</legend>
                <div>
                    <label for="name">Full Name</label>';
					if(!isset($errors['name']) && isset($_POST['name']))
					{
						$name=htmlentities($_POST['name']);
					}
					else
					{
						$name='';
					}
					
        echo 		'<input value="'.$name.'" type="text" name="name" id="name" />';
					if(isset($errors['name']))
					{
						echo " <label>".htmlentities($errors['name'])."</label> ";
					}
        echo       '</div>
                <div>            
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"';
					if(!isset($errors['email'])&& isset($_POST['email']))
					{
						echo "value =".htmlentities($_POST['email']);
					}
					
		echo			' />';
					if(isset($errors['email']))
					{
						echo " <label>".htmlentities($errors['email'])."</label> ";
					}
		
        echo       '</div>
                <div>            
                    <label for="format">Mail format</label>';
		echo		'
                    <select name="format" id="format">
                        <option';
						
						if(isset($_POST['format']) && $_POST['format'] == "plain" )
						{
							echo ' selected="selected" ';
						}
								
		echo			' value="plain">Plain text</option>
                        <option';
						
						if(isset($_POST['format']) && $_POST['format'] == "html" )
						{
							echo ' selected="selected" ';
						}
						
		echo			' value="html">HTML</option>
                    </select>
                </div>
                <div>            
                    <input type="checkbox" name="tac" id="tac"';
						if(isset($_POST['tac']) && $_POST['tac'] == "yes" )
						{
							echo 'checked';
						}
		echo		' value="yes" />
                    <label for="tac">Tick this box to confirm you have read our <a href="#">terms and conditions</a></label>';
					if(isset($errors['tac']))
					{
						echo " <label>".htmlentities($errors['tac'])."</label> ";
					}
			
		echo	'</div>
                <div>            
                    <input type="submit" name="submit" value="SUBMIT" />
                </div>
            </fieldset>
        </form>';
		
		}
		?>

    </body>
</html>
