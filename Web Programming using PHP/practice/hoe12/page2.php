<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Page 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>

<ul>
	<li><a href="page1.php<?php echo SID ?>">Page 1</a></li>
	<li>Page 2</li>
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
<h1>Welcome <?php echo $escaped_name; ?> to Page 2!</h1>
<?php
if(isset($_SESSION['favn']))
{
	echo "<p>Ay bruv, I heard your fav number is ".htmlentities($_SESSION['favn'])."</p>";
}
?>
<p>
In hac habitasse platea dictumst. Suspendisse potenti. Suspendisse semper pulvinar orci.
Pellentesque sollicitudin. Vestibulum aliquam neque sit amet quam. Fusce sed dui. Curabitur
id tortor sit amet lectus bibendum ultrices. Etiam hendrerit. In at diam. Integer nonummy.
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Duis urna nisi, hendrerit ac, rhoncus vitae, pretium imperdiet, velit. Curabitur id quam
gravida nisl semper accumsan.
</p>

<p>
Pellentesque justo magna, faucibus sit amet, placerat ut,
bibendum nec, enim. Quisque risus. Sed convallis aliquam justo. Integer fringilla, sapien id
facilisis convallis, nulla sapien tempor tellus, pharetra pharetra turpis diam in enim.
</p>

</body>
</html>
