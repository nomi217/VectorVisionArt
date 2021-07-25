<?php
include("../admin-area/db/connection.php");
if(isset($_POST['subscribe'])){
		$semail = $_POST['email'];
        // $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        // $upass=substr(str_shuffle($chars), 0,8);
        
			$mailCheck = mysqli_query($con,"SELECT * FROM `subscription` WHERE `subscription_email` = '$semail'");
			if (mysqli_num_rows($mailCheck)>0) {
				echo "<script>
				alert('Email Already Subscribe, Please choose another one');
				window.location.href='../index.php?wrong=2';
				</script>";		
				}
				else{
				$check = mysqli_query($con,"INSERT INTO `subscription`(`subscription_email`) VALUES ('$semail')");
				if ($check) {
					
					$companyname=" VECTOR VISION ";
					$to=$semail;
					$subject='Your are Successfully Subscribe Our Newsletter ';
					$message='Welcome to ' . $companyname . "<br><h3> Hi! We're <b>VECTOR VISION</b> and everything we do is to help you and your organization succeed We
						want to help you grow your marketing, sales, business, and career.";
					$header='From: Vector Vision ' . "\r\n";
					$header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

                    $mailsend=mail($to, $subject, $message,$header);
                    if($mailsend){
                  echo "<script>
				alert('A confirmation email has been send on your email address');
				window.location.href='../index.php';
				</script>";	                    }
                    else{
				echo "<script>
				alert('Failed to send email');
				window.location.href='../index.php';
				</script>";	
				}
				}
			}
		}
?>