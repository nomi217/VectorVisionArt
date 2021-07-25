<?php

function getportfolio(){
include 'db/connection.php';

	                              $checkcategory = mysqli_query($con,"SELECT * from product");
                              if(mysqli_num_rows($checkcategory)>0) {
                                  while($row = mysqli_fetch_array($checkcategory)){

                                          $p_id = $row['p_id'];
                                          $p_title = $row['p_title'];
                                          $date = $row['date'];
                                        echo '<tr>
                                              <td>  '.$p_id.' </td>
                                              <td>  '.$p_title.' </td>
                                              <td>  '.$date.' </td>
                                              <td><a href="detailportfolio.php?p_id='.$p_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                         </tr>';
                                        }
                                      }
}
?>