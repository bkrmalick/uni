<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Page 1</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>

<ul>
	<li>Page 1</li>
	<li><a href="page2.php<?php echo SID ?>">Page 2</a></li>
	<li><a href="page3.php<?php echo SID ?>">Page 3</a></li>
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
<h1>Welcome <?php echo $escaped_name; ?> to Page 1!</h1>
<?php
if(isset($_SESSION['favn']))
{
	echo "<p>Ay bruv, I heard your fav number is ".htmlentities($_SESSION['favn'])."</p>";
}
?>
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin in felis mollis
massa molestie consectetuer. Aliquam eget odio. Ut quam diam, pharetra non, porttitor
sed, venenatis id, risus. Fusce imperdiet molestie lacus. Pellentesque habitant morbi
tristique senectus et netus et malesuada fames ac turpis egestas. Proin porttitor
fermentum augue. Ut egestas, nunc non porta congue, dolor nisi luctus pede, quis
porttitor enim magna et mi.
</p>

<p>
Quisque leo. Morbi id nisi tincidunt leo aliquam tincidunt.
Ut rutrum, velit ac porta scelerisque, est mauris egestas urna, vel volutpat risus pede
a eros. Aenean aliquam ante pulvinar eros. Cras lacinia, urna vitae laoreet ultricies,
dui erat vestibulum nulla, lacinia fringilla elit turpis id augue.
</p>

</body>
</html>
