<?php
@ session_start();
if($_GET && $_GET['sessionid']==session_id())
{
	echo 'Welcome '.$_SESSION['AUTH_USERNAME'];	
}
else
{
	header('Location:index.php');
}
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
include 'includes/chatform.inc.php';
?>
<div id="entries">
<?php
$c = new chat;
$c->showEntries();
?>
</div>
<?php
include 'includes/chatscript.inc.php';
?>
</body>
</html>