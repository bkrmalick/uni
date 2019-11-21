<!DOCTYPE html>
<html lang='en'>

	<head>
		<meta charset='utf-8'/>
		<title>Form Practice</title>
	</head>


	<body>
		<form method='POST' action='index.php'>
			<label for='text'>Input Text Below:</label>
			<input type='text' name='text' id='text'/> <br>
			
			<label for='select'>Select Below:</label> <br>
			<select name='select' id='select'>
				<option value='g' selected='selected'>G(should be selected)</option>
				<option value='r'>R</option>
				<option value='b'>B</option>
			</select><br>
			
			<textarea name='textarea' id='textarea' rows=10 cols=40>Default text area text</textarea><br>
			
			
			<input type='radio' name='radio' value='radio 1 option' id='radio'/>
			<label for='radio'>Radio Option 1</label> <br>
			
			<input type='radio' name='radio' value='radio 2 option' id='radio2'/>
			<label for='radio2'>Radio Option 2</label><br>
			
			<input type='checkbox' name='checky' value='tac' id='checky'/>
			<label for='checky'>Accept the TAC</label><br>
			
			
			<input type='submit' name='submit' value='Submit this B'/>
			
		
		</form>
	</body>

</html>