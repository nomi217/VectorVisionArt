<?php

function getcategory(){
include 'db/connection.php';

	                              $checkcategory = mysqli_query($con,"SELECT id, category_title,category_desc, admin_name FROM category c JOIN admin a on c.admin_id=a.admin_id");
                              if(mysqli_num_rows($checkcategory)>0) {
                                  while($row = mysqli_fetch_array($checkcategory)){

                                          $category_id = $row['id'];
                                          $category_title = $row['category_title'];
                                          $category_desc = $row['category_desc'];
                                          $admin_name=$row['admin_name'];
                                        echo '<tr>
                                              <td>  '.$category_id.' </td>
                                              <td>  '.$category_title.' </td>
                                              <td>  '.$category_desc.' </td>
                                              <td>  '.$admin_name.' </td>
                                         </tr>';
                                        }
                                      }
}
?>