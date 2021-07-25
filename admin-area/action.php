<?php
include 'db/connection.php';

if(!empty($_POST["catID"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM `product_category` WHERE cat_id = ".$_POST['catID']." ";
    $result = $con->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="" disabled selected>--Select Portfolio Category--</option>'; 
        while($row = $result->fetch_array()){  
            echo '<option value="'.$row['p_cat_id'].'">'.$row['p_cat_title'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Portfolio Category not available</option>'; 
    } 
} 
?>