<?php
// Store valid styles in an array for convenience
$site_styles = array('plain', 'light', 'dark'); 

$expiry=array('0','180','604800');

// Variables to store data/errors
$clean = array();
$errors = array();

// "State" flags
$form_is_submitted = false;
$errors_detected = false;

// Check for submitted form
if(isset($_POST['delete_cookies']))
{
	$yesterday=time() - (2*24*3600);
	
	setcookie('title','',$yesterday);
	setcookie('site_style','',$yesterday);
}

if (isset($_POST['personalise'])) {
    
    $form_is_submitted = true;
    
    // Validate the site title
    if (isset($_POST['site_title'])) {
        $trimmed = trim($_POST['site_title']);
        if ($trimmed != '') {
            $clean['site_title'] = $trimmed;
        } else {
            $errors[] = 'Site title is empty';
            $errors_detected = true;
        }
    } else {
        $errors[] = 'Site title not submitted';
        $errors_detected = true;
    }
    
    // Use the built-in "in_array" function to validate the style selection
    if (isset($_POST['site_style']) && in_array($_POST['site_style'], $site_styles)) {
        $clean['site_style'] = $_POST['site_style'];
    } else {
        $errors[] = 'Style not submitted or not valid';
        $errors_detected = true;
    }
	
	if (isset($_POST['cookie_expiry']) && in_array($_POST['cookie_expiry'], $expiry)) {
        $clean['cookie_expiry'] = $_POST['cookie_expiry'];
    } else {
        $errors[] = 'Cookie Expiry not submitted or not valid';
        $errors_detected = true;
    }
}


// If the form was submitted and data was valid...
if ($form_is_submitted == true && $errors_detected == false) {
    
	$expiry_time=$clean['cookie_expiry'];
	
	setcookie('title',$clean['site_title'],time()+$expiry_time);
	setcookie('site_style',$clean['site_style'],time()+$expiry_time);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Web Programming using PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<?php
		 if(isset($_COOKIE['site_style']))
		 {
			 $s1=htmlentities(trim($_COOKIE['site_style']));
		 }
		 else
		 {
			 $s1="plain";
		 }
	?>
	
    <link rel="stylesheet" type="text/css" href="css/<?php echo $s1; ?>.css" />
</head>
<body>
	<div id="page">
        <?php
		 if(isset($_COOKIE['title']))
		 {
			 $t1=htmlentities(trim($_COOKIE['title']));
		 }
		 elseif(isset($_POST['site_title']))
		 {
			 $t1=$clean['site_title'];
		 }
		 else
		 {
			 $t1="P1";
		 }
		?>
        <h1><a href="index.php"><?php echo "$t1" ?></a></h1>
