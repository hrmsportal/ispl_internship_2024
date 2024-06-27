<?php require_once(dirname(__DIR__).'/common/header.php') ?>

<center><h1>Add/edit employee details</h1></center>

<div>
	<div class="left-sidebar">
<?php require_once(BASE_DIR.'/sidebars/left-sidebar.php') ?>
	</div>
	<div class="content">
		<a href="<?php echo BASE_URL ?>/employees/list.php" class="btn">Go Back</a>
		<?php 
		require_once(BASE_DIR.'/employees/save.php');
		require_once(BASE_DIR.'/employees/form.php'); ?>
	</div>
</div>
<?php require_once(BASE_DIR.'/common/footer.php') ?>
