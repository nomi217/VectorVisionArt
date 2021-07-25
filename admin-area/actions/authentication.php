<?php
session_start();
include '../includes/connection.php';
include '../../functions.php';
// if (isset($_SESSION['ae'])) {
//   header("location:User_Panel/user-index.php");
// }
if (isset($_POST['login_pageBTN']) && isset($_POST['utype'))) {
	//	$_email=;
		$password=($_POST['pwd']);
		 $username = ($_POST['username']); 
			
		  $username = mysqli_real_escape_string($conn,$username); 
		  $password = mysqli_real_escape_string($conn,$password); 

  $query="SELECT * FROM `admin` WHERE `a_username` = '$username' AND `a_pass` = '$password'";
#   die;
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) ==1) {
      $data=mysqli_fetch_assoc($result);
        		if ($data['user_type_id']==='3') {
			             // $email=
			              $_SESSION['admin_panel_session_username']=$username;
			              header("location:../index.php");
                }
    }
    else{
    			header("location:../login.php?wrong=1");
    	}
  }
