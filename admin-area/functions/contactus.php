<?php

function getcontact(){
include 'db/connection.php';

	                              $checkcontact = mysqli_query($con,"SELECT * FROM contact");
                              if(mysqli_num_rows($checkcontact)>0) {
                                  while($row = mysqli_fetch_array($checkcontact)){

                                          $contact_id = $row['c_id'];
                                          $name = $row['c_name'];
                                          $email = $row['c_email'];
                                          $subject = $row['c_subject'];
                                          $message = $row['c_message'];
                                          $time_stamp = $row['timestamp'];
                                        echo '<tr>                                             
                                              <td>  '.$contact_id.' </td>
                                              <td>  '.$name.' </td>
                                              <td>  '.$email.' </td>
                                              <td>  '.$subject.' </td>
                                              <td align="justify">  '.$message.' </td>
                                              <td>  '.$time_stamp.' </td>
                                             
                                         </tr>';
                                        }
                                      }
}
?>