<?php 
session_start();
if(isset($_SESSION['admin_panel_session_username']))
    {
    		$admin_panel_session_username = $_SESSION['admin_panel_session_username'];

    }
    else{
           	header("location:../login.php");
        }
?>