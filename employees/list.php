<?php require_once(dirname(__DIR__).'/common/header.php'); ?>

<center><h1>Employees' List</h1></center>

<div>
	<div class="left-sidebar">
<?php require_once(BASE_DIR.'/sidebars/left-sidebar.php') ?>
	</div>
	<div class="content">
		
		<a href="<?php echo BASE_URL ?>/employees/add-edit.php" class="btn">Add New</a>
		
		<?php $statement = "SELECT id,first_name,last_name,contact_number,email_id,status FROM users";

				$run_query = mysqli_query($db_connect,$statement);

				if ($run_query->num_rows>0) { ?>
					<br>
					<table border="1">
						<tr>
							<th>S.No.</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Contact Number</th>
							<th>Email Id</th>
							<th>Status</th>
							<th>View Details</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					<?php 

					$counter = 1;

					while ($row = mysqli_fetch_object($run_query)) { ?>
						<tr>
							<td><?php echo $counter ?></td>
							<td><?php echo $row->first_name  ?></td>
							<td><?php echo $row->last_name  ?></td>
							<td><?php echo $row->contact_number  ?></td>
							<td><?php echo $row->email_id  ?></td>
							<td><?php echo $row->status  ?></td>
							<td><a href="<?php echo BASE_URL; ?>employees/view-details.php?id=<?php echo $row->id ?>">View Details</a></td>
							<td><a href="<?php echo BASE_URL; ?>employees/add-edit.php?id=<?php echo $row->id ?>">Edit Details</a></td>
							<td><a href="<?php echo BASE_URL; ?>employees/delete.php?id=<?php echo $row->id ?>">Delete</a></td>
						</tr>
					<?php $counter++; } ?>
					</table>
				<?php } else {
					echo 'No data found.';
				}
		 ?>

	</div>
</div>
<?php require_once('../common/footer.php') ?>
