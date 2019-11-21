		<div id="footer">
            <h3>Personalise this website</h3>
            <?php
            // Collect the output in a variable
            // This will end up containing either the form or success messages
            $footer_output = '';
            
            // use the state variables set in header.php to decide what action to take
			
		
				
				if ($form_is_submitted == true && $errors_detected == false) {
					
					// Form was submitted and no errors were detected
					$footer_output .= '<p>Selected title: ' . htmlentities($clean['site_title']) . '</p>';
					$footer_output .= '<p>Selected style: ' . htmlentities($clean['site_style']) . '</p>';
				
				} else 
				{
					// Sanitise the current URL for use in the "action" attribute
						$self = htmlentities($_SERVER['PHP_SELF']);
						
					if(count($_COOKIE)==0)
					{

						// Either the form was not submitted, or it was submitted and errors were detected.
					
						// If we are redisplaying the form... i.e. errors were detected
						if ($errors_detected == true) {
							$messages = implode(', ', $errors);
							$footer_output .= '<p>Some errors were detected: ' . $messages . '</p>';
						}
						
						// if $clean['site_title'] exists, we will redisplay it in the form
						if (isset($clean['site_title'])) {
							$redisplay_title = htmlentities($clean['site_title']);
						} else {
							$redisplay_title = '';
						}
						
						
						// Add the form code to $footer_output
						$footer_output .= '<form action="' . $self . '" method="post">
							<div>
							
								<label for="sitetitle">Site title:</label>
								<input type="text" name="site_title" id="sitetitle" value="' . $redisplay_title . '" />
								
								<label for="styleselect">Select a style:</label>
								<select name="site_style" id="styleselect">
									<option value="plain">Plain theme</option>
									<option value="light">Light theme</option>
									<option value="dark">Dark theme</option>
								</select>
								
								<label for="styleselect">Select pref expiry:</label>
								<select name="cookie_expiry" id="styleselect">
									<option value="0">This Session</option>
									<option value="180">Three minutes</option>
									<option value="604800">A week</option>
								</select>
								
								<input type="submit" name="personalise" value="Go" />
							
							</div>
						</form>';
					
					}
					else
					{
						echo '<p>Selected title: ' . htmlentities($_COOKIE['title']) . '</p>';
						echo '<p>Selected style: ' . htmlentities($_COOKIE['site_style']) . '</p>';
						
						$footer_output=
						'<form action="' . $self . '" method="post"> 
							<div> 
							
								
								<input type="submit" name="delete_cookies" value="Delete Cookies" /> 
							
							</div>
						</form>';
								
					}
				}
				
				
				// Echo either the form HTML or the "success" messages
				
				
			
			
			echo $footer_output;
            ?>
				
		</div>

	</div>
</body>

</html>
