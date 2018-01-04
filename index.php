<?php
include('config.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Members Area</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">
<?php
?>
Hello<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br />
Welcome on our website.<br />
You can <a href="users.php">see the list of users</a>.<br /><br />
<?php
if(isset($_SESSION['username']))
{
$nb_new_pm = mysqli_fetch_array(mysqli_query($con,('select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"')));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
?>
<a href="edit_infos.php">Edit my personnal informations</a><br />
<a href="list_pm.php">My personnal messages(<?php echo $nb_new_pm; ?> unread)</a><br />
<a href="connexion.php">Logout</a>
<?php
}
else
{
?>
<a href="sign_up.php">Sign up</a><br />
<a href="connexion.php">Log in</a>
<?php
}
?>
		</div>
	</body>
</html>