<?php 

if (isset($_POST['save_details'])) {

		$first_name  	 = $_POST['first_name'];
		$last_name       = $_POST['last_name'];
		$contact_number  = $_POST['contact_number'];
		$dob  			 = $_POST['dob'];
		$doj  			 = $_POST['doj'];
		$email  		 = $_POST['email'];
		$password  		 = md5($_POST['password']);
		$updated_by = $created_by      = $_SESSION['user_id'];
		$updated_date = $created_date    = date('Y-m-d');

		$statement = 'INSERT INTO `users`(`first_name`, `last_name`, `contact_number`, `dob`, `doj`, `email_id`, `password`, `created_datetime`,`updated_datetime`, `created_by`,`updated_by`) values("'.$first_name.'","'.$last_name.'","'.$contact_number.'","'.$dob.'","'.$doj.'","'.$email.'","'.$password.'","'.$created_date.'","'.$updated_date.'","'.$created_by.'","'.$created_by.'")';

		$run_query = mysqli_query($db_connect,$statement);

		if ($run_query) {
			echo "Data saved successfully.";
		} else {
			echo "Data could not be saved, please try again.";
		}

}


if (isset($_POST['update_details'])) {

		$first_name  	 = $_POST['first_name'];
		$last_name       = $_POST['last_name'];
		$contact_number  = $_POST['contact_number'];
		$dob  			 = $_POST['dob'];
		$doj  			 = $_POST['doj'];
		$email  		 = $_POST['email'];
		$password  		 = md5($_POST['password']);
		$updated_by = $created_by      = $_SESSION['user_id'];
		$updated_date = $created_date    = date('Y-m-d');

		$statement = 'update `users` SET first_name="'.$first_name.'", last_name="'.$last_name.'", contact_number="'.$contact_number.'" WHERE id='.$_GET['id'];

		$run_query = mysqli_query($db_connect,$statement);

		if ($run_query) {
			echo "Data updated successfully.";
		} else {
			echo "Data could not be udpated, please try again.";
		}
}
	
 ?>