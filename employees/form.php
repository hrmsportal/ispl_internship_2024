
<?php 
	
	$user = NULL;
	$button = '<input type="submit" class="btn" name="save_details" value="Submit">';
	if (isset($_GET['id'])) {

		$statement = "SELECT * from users where id=".$_GET['id'];
			$run_query = mysqli_query($db_connect,$statement);

			if ($run_query) {
				$user = mysqli_fetch_object($run_query);
			}
		
		$button = '<input type="submit" class="btn" name="update_details" value="Update">';
	}
	 ?>

<div class= "form-container">
<form action="" method="post">
	<div>
		<label>First Name</label>
	</div>
	<div>
		<input type="text" name="first_name" value="<?php echo $user->first_name ?>" required>
	</div>

	<div>
		<label>Last Name</label>
	</div>
	<div>
		<input type="text" name="last_name" value="<?php echo $user->last_name ?>" required>
	</div>

	<div>
		<label>Contact Number</label>
	</div>
	<div>
		<input type="text" name="contact_number" value="<?php echo $user->contact_number ?>" required>
	</div>

	<div>
		<label>DOB</label>
	</div>
	<div>
		<input type="date" name="dob" value="<?php echo $user->dob ?>" required>
	</div>

	<div>
		<label>DOJ</label>
	</div>
	<div>
		<input type="date" name="doj" value="<?php echo $user->doj ?>" required>
	</div>

	<div>
		<label>Email</label>
	</div>
	<div>
		<input type="email" name="email" value="<?php echo $user->email_id ?>" required>
	</div>

		<div>
		<label>Password</label>
	</div>
	<div>
		<input type="text" name="password" <?php echo (isset($_GET['id']))?'':'required' ?>>
	</div>

	<br>
	<div>
		<?php echo "$button"; ?>
	</div>
</form>
</div>