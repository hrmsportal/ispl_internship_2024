<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once(dirname(__DIR__).'/config.php') ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>includes/css/style.css?v=2">
 <ul class="header-menus">
	<li><a href="profile.php">My profile</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
</head>
<body>