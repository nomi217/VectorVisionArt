<?php

function getprocategory(){
include 'db/connection.php';

	                              $checkcategory = mysqli_query($con,"SELECT category_title,p_cat_id,p_cat_title,p_cat_desc,admin_name FROM product_category p JOIN category c on p.cat_id=c.id JOIN admin a on p.admin_id=a.admin_id");
                                 if(mysqli_num_rows($checkcategory)>0) {
                                  while($row = mysqli_fetch_array($checkcategory)){

                                          $pcategory_id = $row['p_cat_id'];
                                          $pcategory_title = $row['p_cat_title'];
                                          $pcategory_desc = $row['p_cat_desc'];
                                          $cat_title=$row['category_title'];
                                          $admin_name=$row['admin_name'];
                                        echo '<tr>
                                              <td>  '.$pcategory_id.' </td>
                                              <td>  '.$pcategory_title.' </td>
                                              <td>  '.$pcategory_desc.' </td>
                                              <td>  '.$cat_title.'</td>
                                              <td>  '.$admin_name.'</td>
                                         </tr>';
                                        }
                                      }
}
?>