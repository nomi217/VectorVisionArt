<?php
include "../db/connection.php";

                                              /* Category */

if (isset($_POST['submit_category'])) {
$admin_id = $_POST['admin_id'];
$category_name = $_POST['category_name'];
$category_desc = $_POST['category_desc'];

$mailCheck = mysqli_query($con,"SELECT * FROM `category` WHERE `category_title` = '$category_name'");
			if (mysqli_num_rows($mailCheck)>0) {
				echo "<script>
				alert('Category Already Exist, Please choose another one');
				window.location.href='../add_category.php?wrong=1';
				</script>";		
				}
				else{
 $query="INSERT INTO `category`(`admin_id`, `category_title`, `category_desc`) VALUES ('$admin_id','$category_name','$category_desc')";

       $sql = mysqli_query($con, $query);
            
    if ($sql) {    	
            echo "<script>
            alert('Category Added Successfully');
            window.location.href='../add_category.php';
            </script>";
    }
    else{
    	echo "<script>
            alert('Category Not Added');
            window.location.href='../add_category.php';
            </script>";
    }

}
}


                                             /* Portfolio Category */


if (isset($_POST['submit_pro_category'])) {

$admin_id = $_POST['admin_id'];
$cat_id=$_POST['main_category_name'];
$pcategory_name = $_POST['portf_category_name'];
$pcategory_desc = $_POST['portf_cat_desc'];

$mailCheck = mysqli_query($con,"SELECT * FROM `product_category` WHERE `p_cat_title` = '$pcategory_name'");
			if (mysqli_num_rows($mailCheck)>0) {
				echo "<script>
				alert('Portfolio Category Already Exist, Please choose another one');
				window.location.href='../add_pro_category.php?wrong=1';
				</script>";		
				}
				else{
 $query="INSERT INTO `product_category`(`cat_id`,`p_cat_title`, `p_cat_desc`, `admin_id`) VALUES ('$cat_id','$pcategory_name','$pcategory_desc','$admin_id')";

       $sql = mysqli_query($con, $query);
            
    if ($sql) {    	
            echo "<script>
            alert('Portfolio Category Added Successfully');
            window.location.href='../add_pro_category.php';
            </script>";
    }
    else{
    	echo "<script>
            alert('Portfolio Category Not Added');
            window.location.href='../add_pro_category.php';
            </script>";
    }

}
}



                                             /* Portfolio Added */


if(isset($_POST['submit_portfolio'])){
    
    $product_title = $_POST['portf_title'];
    $cat = $_POST['maincategory'];
    $product_cat = $_POST['portfcategory'];
    $product_desc = $_POST['portf_desc'];
        $admin_id = $_POST['admin_id'];

    $product_img1 = $_FILES['portf_image']['name'];

    
    $temp_name1 = $_FILES['portf_image']['tmp_name'];

      $mailCheck = mysqli_query($con,"SELECT * FROM `product` WHERE `p_title` = '$product_title' OR p_img='$product_img1'");
            if (mysqli_num_rows($mailCheck)>0) {
                echo "<script>
                alert('This Name Portfolio Already Exist, Please choose another one');
                window.location.href='../add_portfolio.php?wrong=1';
                </script>";     
                }
                else{
                  move_uploaded_file($temp_name1,"../images/portfolio_images/$product_img1");
  
    
    $insert_product = "INSERT INTO `product` (p_cat_id,cat_id,p_title,p_img,p_desc,admin_id,date) VALUES ('$product_cat','$cat','$product_title','$product_img1','$product_desc','$admin_id',NOW())";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Portfolio Has Been Added Sucessfully!')</script>";
        echo "<script>window.open('../add_portfolio.php','_self')</script>";
        
    }
    else{
          echo "<script>alert('Portfolio Has Not Added!')</script>";
        echo "<script>window.open('../add_portfolio.php','_self')</script>";
    }
    
}
}
?>