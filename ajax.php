<?php
if ( ($_POST['contactName']!="") && ($_POST['contactEmail']!="")){
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject=$_POST['contactSubject'];
$message = $_POST['contactMessage'];
 
$to = "naumankhalid2015@gmail.com";
$subject = "AllPHPTricks Contact Form Email";
$message = "<p>New email is received from $name.</p>
<p>$message</p>";
 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
 echo "<span style='color:green; font-weight:bold;'>
 Thank you for contacting us, we will get back to you shortly.
 </span>";
}
else{
 echo "<span style='color:red; font-weight:bold;'>
 Sorry! Your form submission is failed.
 </span>";
 }
}
?>