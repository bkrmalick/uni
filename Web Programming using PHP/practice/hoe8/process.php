<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Form processing page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <h1>Data from the form:</h1>

        <?php
		
		$data= array();
		$errors=array();
		
        if(isset($_POST['name']) && strlen($_POST['name'])<=7 && strpos(trim($_POST['name'])," ")!=False)
		{
			#$name=trim($_POST['name']);
			#echo '<p>NAME: '.htmlentities($name).'</p>';
			
			$data['name']=htmlentities(trim($_POST['name']));
		}
		else
		{
			#echo '<p>NAME: INVALID</p>';
			$errors['name']='Name is not valid';
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
		}
		
		foreach($data as $field=>$value)
		{
			echo "<p>$field : $value</p>";
		}
		
		foreach($errors as $field=>$error)
		{
			echo "<p>$field : $error</p>";
		}
        ?>

    </body>
</html>
