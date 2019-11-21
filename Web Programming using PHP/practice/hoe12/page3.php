<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Page 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>

<ul>
	<li><a href="page1.php<?php echo SID ?>">Page 1</a></li>
	<li><a href="page2.php<?php echo SID ?>">Page 2</a></li>
	<li>Page 3</li>
</ul>

<?php 
// include the form and related code
require 'includes/form.php'; 
?>

<!-- Greeting -->
<?php 
if(isset($_SESSION['fname']))
{
	$escaped_name=htmlentities($_SESSION['fname']);
}
else
{
	$escaped_name='Stranger';
}
?>
<h1>Welcome <?php echo $escaped_name; ?> to Page 3!</h1>
<?php
if(isset($_SESSION['favn']))
{
	echo "<p>Ay bruv, I heard your fav number is ".htmlentities($_SESSION['favn'])."</p>";
}
?>
<p>In dui dui, ullamcorper non, vestibulum vitae, facilisis a, mi. Maecenas et urna nec nisi
ornare tempus. Maecenas quis nunc vitae enim hendrerit egestas. Nunc justo. Vestibulum ante
ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam imperdiet sem
rutrum diam.</p>

<p>Quisque eleifend. Mauris congue purus in nulla. Aliquam nec erat. Proin id sem.
Donec facilisis. In in diam. Pellentesque commodo ligula id lorem. Nullam dictum leo non risus.
Ut lorem lacus, ultricies sollicitudin, cursus in, porttitor id, ipsum. In mollis nibh et ipsum.
Cras blandit nisl condimentum lorem. Phasellus ligula mi, gravida a, molestie vel, mollis tempus,
justo.</p>

</body>
</html>
