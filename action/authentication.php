<?php
session_start();
include("../admin-area/db/connection.php");

if(isset($_POST['login'])){
 $username=$_POST['username'];
 $password=$_POST['password'];


 if($con){
 	$acheck= mysqli_query($con,"SELECT * FROM `admin` WHERE `admin_username`='$username' AND `admin_password`='$password'");
 	if(mysqli_num_rows($acheck)>0){
 		$_SESSION['admin_panel_session_username']=$username;
 		header("location:../admin-area/index.php");

 	}
 	else{
 		header("location:../login.php?wrong=1");
 	}
 }
}
?>