<?php
include '../db/connection.php';

if(isset($_GET['suspend_vehicle'])){
    $vehicle_id = $_GET['suspend_vehicle'];
    $query = "UPDATE `vehicles` SET `vehicle_status`=1 WHERE `vehicle_id`='$vehicle_id'";
    $query = mysqli_query($conn, $query);
    
    if ($query) {
        $url = "../detailvehicle.php?vehicle_id=$vehicle_id";
        header("Location:$url");
    }
}
//----------Update Tours------------//

if(isset($_GET['completetour'])){
    $tour_id = $_GET['completetour'];

$query = "UPDATE `tours` SET `tour_status`=3 WHERE `tour_id`='$tour_id'";
    $query = mysqli_query($conn, $query);
    
    if ($query) {
        $url = "../detailorder.php?tour_id=$tour_id";
        header("Location:$url");
    }
}


//Close vehicle Update

//-----Profile Update-------//
if(isset($_POST['updateprofile'])){
    
    $name = $_POST['a_name'];
    $a_id = $_POST['a_id'];
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
    $password=$_POST['password'];
    $c_image = $_FILES['c_image']['name'];
    $temp_image = $_FILES['c_image']['tmp_name'];
    move_uploaded_file($temp_image, "../images/$c_image");

    $query1="UPDATE `admin` SET `admin_name`='$name',`admin_img`='$c_image',`admin_mobile`='$contact_no',`admin_address`='$address',`admin_password`='$password' WHERE `admin_id` = '$a_id'";   
     $sql1 = mysqli_query($con, $query1);
     
     if ($sql1)
                {
                    $url = "../profile.php";
                    header("Location:$url");
            }
            
}

?>