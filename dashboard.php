<?php session_start();

if ($_SESSION['user_id']) {
require_once('common/header.php'); ?>

<center><h1>Dashobard</h1></center>

<div>
	<div class="left-sidebar">
<?php require_once('sidebars/left-sidebar.php') ?>
	</div>
	<div class="content">
		
<p>Something awesome comming soon...</p>
	</div>
</div>
<?php require_once('common/footer.php');
} else {

header('location:'.BASE_URL.'index.php');

}

 ?>