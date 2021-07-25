<?php
include '../includes/connection.php';
include '../includes/session_check.php';


$a_username = $_SESSION['admin_panel_session_username'];


if (isset($_POST['image'])) {

	$c_image = $_FILES['c_image']['name'];
	$temp_image = $_FILES['c_image']['tmp_name'];
	move_uploaded_file($temp_image, "../images/$c_image");


		$query5 = "UPDATE `admin` SET `admin_profile`='$c_image' where `a_username`='$a_username'";
		$run5 = mysqli_query($conn, $query5);

		if ($run5) {
			header("Location:../profile.php");
		}
	
}




?>