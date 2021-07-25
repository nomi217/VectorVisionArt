<?php

function activeusers(){
	include '../includes/connection.php';
	             $activeuser = mysqli_query($conn,"SELECT * FROM users WHERE status='0'");
                              if(mysqli_num_rows($activeuser)>0){
                                  while($row = mysqli_fetch_array($activeuser)){
                                            $user_id  = $row['user_id'];
                                            $user_name= $row['user_name'];
                                            $user_email= $row['user_email'];
                                            $user_contact_no  = $row['user_contact_no'];
                                            $user_type_id  = $row['user_type_id']; 
                                            $user_cnic  = $row['user_cnic'];
                                            $user_address  = $row['user_address'];
                                            $status = $row['status'];
                                            $record_date  = $row['record_date'];

                                        echo '<tr>
                                              <td>'.$user_id.'</td>
                                              <td>'.$user_name.'</td>
                                              <td>'.$user_cnic.'</td>
                                              <td>'.$user_contact_no.'</td>
                                              <td><a href="detailuser.php?user_id='.$user_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}


function suspendedusers(){
	include '../includes/connection.php';
	            $suspendedusers = mysqli_query($conn,"SELECT * FROM users WHERE status='1'");
                              if(mysqli_num_rows($suspendedusers)>0){
                                  while($row = mysqli_fetch_array($suspendedusers)){
                                          $user_id = $row['user_id'];
                                          $user_name = $row['user_name'];
                                          $user_email = $row['user_email'];
                                          $user_contact_no = $row['user_contact_no'];
                                          $user_cnic = $row['user_cnic'];
                                          $user_type_id = $row['user_type_id'];
                                          $user_address = $row['user_address'];
                                          $user_description_self = $row['user_description_self'];

                                        echo '<tr>
                                              <td>'.$user_id.'</td>
                                              <td>'.$user_name.'</td>
                                              <td>'.$user_cnic.'</td>
                                              <td>'.$user_contact_no.'</td>
                                              <td><a href="detailuser.php?user_id='.$user_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}

function totalusers(){
	include '../includes/connection.php';
	            $totalusers = mysqli_query($conn,"SELECT * FROM `users`");
                            if(mysqli_num_rows($totalusers)>0){
                                while($row = mysqli_fetch_array($totalusers)){

                                        $user_id  = $row['user_id'];
                                        $user_name= $row['user_name'];
                                        $user_email= $row['user_email'];
                                        $user_contact_no  = $row['user_contact_no'];
                                        $user_type_id  = $row['user_type_id']; 
                                        $user_cnic  = $row['user_cnic'];
                                        $user_address  = $row['user_address'];
                                        $status = $row['status'];
                                        $record_date  = $row['record_date'];
                                        
                                        echo '<tr>
                                              <td>'.$user_id.'</td>
                                              <td>'.$user_name.'</td>
                                              <td>'.$user_cnic.'</td>
                                              <td>'.$user_contact_no.'</td>
                                              <td>'.$user_email.'</td>
                                              <td><a href="detailuser.php?user_id='.$user_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}

?>