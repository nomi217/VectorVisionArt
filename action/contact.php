<?php
include '../admin-area/db/connection.php';
if(isset($_POST['contact_us'])){
	$name=$_POST['contactName'];
	$email=$_POST['contactEmail'];
	$subject=$_POST['contactSubject'];
	$message=$_POST['contactMessage'];
	$sql="INSERT INTO `contact`(`c_name`, `c_email`, `c_subject`, `c_message`) VALUES ('$name','$email','$subject','$message')";
    $cquery=mysqli_query($con,$sql);
	if($cquery){
		echo "<script>alert('Your Message Has Been Send');
			window.location.href='../index.php';</script>";
	}
	}
?>