<?php

function getsubscribeemail(){
include 'db/connection.php';

	                              $checkcontact = mysqli_query($con,"SELECT * FROM subscription");
                              if(mysqli_num_rows($checkcontact)>0) {
                                  while($row = mysqli_fetch_array($checkcontact)){

                                          $s_id = $row['s_id'];
                                          $email = $row['subscription_email'];
                                          $time_stamp = $row['timestamp'];
                                        echo '<tr>
                                              <td>  '.$s_id.' </td>
                                              <td>  '.$email.' </td>
                                              <td>  '.$time_stamp.' </td>
                                             
                                         </tr>';
                                        }
                                      }
}
?>