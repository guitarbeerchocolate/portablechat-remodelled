<?php
session_start();
require_once 'classes/autoload.php';
$config = NULL;
$config = new config;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Portable chat</title>
<?php
include 'includes/chatstyle.inc.php';
include 'includes/jquery.inc.php';
?>
</head>
<body>
<h1>Portable chat</h1>
<img src="<?php echo $config->values->IMAGE_LOC; ?>loading.gif" />
<?php
include 'includes/loginform.inc.php';
include 'includes/loginscript.inc.php';
?>
</body>
</html>