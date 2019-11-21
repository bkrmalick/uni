<!DOCTYPE html>
<html lang='en'>
	<?php include 'functions.php'; ?>
	<head>
		<meta charset='utf-8'/>
		<title>Form Practice</title>
	</head>


	<body>
		<?php
			$form_submitted=false;
			$error=false;
			$clean=array();
			$errors=array();
			
			if(isset($_POST['submit']))
			{
				$form_submitted=True;
				
				validateData($errors,$clean,$error);
			}
			
			if(!$error && $form_submitted)
			{
				displayData($clean);
			}
			else
			{
				displayForm($errors,$clean); 
			}
		
		?>
	
	</body>	

</html>