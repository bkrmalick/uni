<?php
// State variables
$form_is_submitted = false;
$errors_detected = false;

// Arrays to gather data
$clean = array();
$errors = array();
//????
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($_POST['delete_session']))
{
		$_SESSION =array();
		
		if(ini_get("session.use_cookies"))
		{
			$yesterday= time() - 2*(24*3600);
			setcookie(session_name(),'',$yesterday);
		}
		
		session_destroy();
		header('Location: '.$_SERVER['PHP_SELF']);
}


if(count($_SESSION)==0)
{
	// Validate form if it was submitted
	if (isset($_POST['submitdetails'])) {
		
		$form_is_submitted = true;
		
		// First name is a required field
		if (isset($_POST['firstname'])) {
			$name_in = trim($_POST['firstname']);
			$length = strlen($name_in);
			if ($length >= 1) {
				$clean['firstname'] = $name_in;
			} else {
				$errors_detected = true;
				$errors[] = 'First name is required';
			}
		} else {
			$errors_detected = true;
			$errors[] = 'First name not submitted';
		}
		
		// Favourite number must be a whole number greater than 0
		if (isset($_POST['favourite'])) {
			$favourite_in = trim($_POST['favourite']);
			if (ctype_digit($favourite_in) && $favourite_in > 0) {
				$clean['favourite'] = $favourite_in;
			} else {
				$errors_detected = true;
				$errors[] = 'Favourite number should be a whole number greater than 0';
			}
		} else {
			$errors_detected = true;
			$errors[] = 'Number not submitted';
		}

	}

	// Collect output in a variable, tidier than multiple "echo" calls
	$output = '';

	// Decide whether to process data or (re)display form
	if ($form_is_submitted === true && $errors_detected === false) {
		
		// Submission was OK, so display thank-you message
		$output .= '<p>Thanks, we will remember you!</p>';
		
		$_SESSION['fname']=$clean['firstname'];
		$_SESSION['favn']=$clean['favourite'];

	} else {
		
		// Display error messages, if there are any
		if ($errors_detected === true) {
			$output .= '<p>Sorry, we found some errors with your data:</p>';
			$output .= '<ul>';
			foreach ($errors as $reason) {
				$output .= '<li>'.htmlentities($reason).'</li>';
			}
			$output .= '</ul>';
		}
		
		// data to redisplay in the form...
		if (isset($clean['firstname'])) {
			$html_firstname = htmlentities($clean['firstname']);
		} else {
			$html_firstname = '';
		}
		
		// data to redisplay in the form...
		if (isset($clean['favourite'])) {
			$html_favourite = htmlentities($clean['favourite']);
		} else {
			$html_favourite = '';
		}
		
		// Sanitise the current URL for use in the "action" attribute of form
		$self = htmlentities($_SERVER['PHP_SELF']);

		// display the form, with valid data (if there is any)
		$output .= '<form action="' . $self . '"method="post">
				<fieldset>
					<legend>Your details</legend>
					
					<div>
						<label for="fn">What is your first name?</label>
						<input type="text" name="firstname" id="fn" value="' . $html_firstname . '" />
					</div>

					<div>
						<label for="fav">What is your favourite number?</label>
						<input type="text" name="favourite" id="fav" value="' . $html_favourite . '" />
					</div>

					<input type="submit" name="submitdetails" value="Remember Me!" />

				</fieldset>
			</form>';

	}
}
else
{
	$output = '<form action="' . htmlentities($_SERVER['PHP_SELF']) . '"method="post">
					<fieldset>
						<legend>Your details</legend>
						
						<div>
							<label>First name: '.htmlentities(trim($_SESSION['fname'])).' </label>
							
						</div>

						<div>
							<label>Favourite number: '.htmlentities(trim($_SESSION['favn'])).' </label>
							
						</div>

						<input type="submit" name="delete_session" value="Delete Session" />

					</fieldset>
				</form>';
}

// Echo gathered output from script
echo $output;
?>
