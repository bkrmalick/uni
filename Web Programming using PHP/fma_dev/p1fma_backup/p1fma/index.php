<?php 
	ob_start();
	require 'includes/functions.php';
	forceRefresh();
	
	if(!isset($_SESSION['logout']) || !$_SESSION['logout']) //if redirected from logout page, then it already has session start
	{
		session_start();
	}
?>

<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<link rel='stylesheet' type='text/css' href='includes/styles.css'/>
		
		<title>WIPP - Homepage</title>
	
	</head>
	
	
	
	<body>
		<div class='main-container'>
		
			<?php 
				$logout=false;
				if(isset($_SESSION['logout']) && $_SESSION['logout']==true) //if log out requested
				{
					clearSessCook();
					$logout=true;
				}
				
				require 'includes/header.php';
				

				makeNavigation('Homepage'); //make the navigation with the homepage as the active page
			?>
			
			
			
			<h1>Homepage</h1>
			
			<?php
				if($logout)
				{
					echo "<h3>You have been logged out...</h3>";
					$logout=false;
				}
				else
				{
					echo "<h3>Welcome to the DCS WIPP portal!</h3>";
				}
			?>
			
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet placerat felis. Ut sit amet velit lorem. Nullam velit metus, placerat sit amet dolor in, congue pulvinar ipsum. Quisque vitae nisl in sapien iaculis pellentesque eget ut augue. Cras id lectus diam. Integer placerat semper erat, sit amet elementum arcu bibendum eget. Sed imperdiet a velit a bibendum. Sed sagittis eleifend blandit. Suspendisse quam nisi, tempus quis arcu eget, gravida sodales diam. In nec erat at dui bibendum vehicula ut ut purus. Praesent viverra, odio id fringilla interdum, enim tellus iaculis mauris, ut hendrerit eros sapien at odio. Donec felis lorem, viverra eu facilisis nec, pulvinar nec dui. Vestibulum vel mauris quis mi consequat sodales in in nunc. Suspendisse ante mi, mollis et quam sit amet, facilisis semper orci. Donec scelerisque placerat mauris et suscipit. Sed lacinia vel nisl sit amet maximus.</p>
			
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet placerat felis. Ut sit amet velit lorem. Nullam velit metus, placerat sit amet dolor in, congue pulvinar ipsum. Quisque vitae nisl in sapien iaculis pellentesque eget ut augue. Cras id lectus diam. Integer placerat semper erat, sit amet elementum arcu bibendum eget. Sed imperdiet a velit a bibendum. Sed sagittis eleifend blandit. Suspendisse quam nisi, tempus quis arcu eget, gravida sodales diam. In nec erat at dui bibendum vehicula ut ut purus. Praesent viverra, odio id fringilla interdum, enim tellus iaculis mauris, ut hendrerit eros sapien at odio. Donec felis lorem, viverra eu facilisis nec, pulvinar nec dui. Vestibulum vel mauris quis mi consequat sodales in in nunc. Suspendisse ante mi, mollis et quam sit amet, facilisis semper orci. Donec scelerisque placerat mauris et suscipit. Sed lacinia vel nisl sit amet maximus.</p>
			
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet placerat felis. Ut sit amet velit lorem. Nullam velit metus, placerat sit amet dolor in, congue pulvinar ipsum. Quisque vitae nisl in sapien iaculis pellentesque eget ut augue. Cras id lectus diam. Integer placerat semper erat, sit amet elementum arcu bibendum eget. Sed imperdiet a velit a bibendum. Sed sagittis eleifend blandit. Suspendisse quam nisi, tempus quis arcu eget, gravida sodales diam. In nec erat at dui bibendum vehicula ut ut purus. Praesent viverra, odio id fringilla interdum, enim tellus iaculis mauris, ut hendrerit eros sapien at odio. Donec felis lorem, viverra eu facilisis nec, pulvinar nec dui. Vestibulum vel mauris quis mi consequat sodales in in nunc. Suspendisse ante mi, mollis et quam sit amet, facilisis semper orci. Donec scelerisque placerat mauris et suscipit. Sed lacinia vel nisl sit amet maximus.</p>
			
			
			
		</div>	
		<?php 
			require 'includes/footer.php'; 
		?>
	</body>



</html>