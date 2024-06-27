<?php require_once(dirname(__DIR__).'/common/header.php'); ?>

<center><h1>Employees' List</h1></center>

<div>
	<div class="left-sidebar">
<?php require_once(BASE_DIR.'/sidebars/left-sidebar.php') ?>
	</div>
	<div class="content">
		
		<a href="<?php echo BASE_URL ?>/employees/add-edit.php" class="btn">Add New</a>
		
	</div>
</div>
<?php require_once('../common/footer.php') ?>
