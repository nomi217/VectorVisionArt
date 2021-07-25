<?php
function totaltouragent(){
include '../includes/connection.php';
      $totaltouragent = mysqli_query($conn,"SELECT * FROM `tour_agents`");
                            if(mysqli_num_rows($totaltouragent)>0){
                                while($row = mysqli_fetch_array($totaltouragent)){

                                        $tour_agent_id  = $row['tour_agent_id'];
                                        $agent_name= $row['agent_name'];
                                        $agent_email= $row['agent_email'];
                                        $agent_contact_no  = $row['agent_contact_no'];
                                        $agent_address  = $row['agent_address']; 
                                        $user_type_id  = $row['user_type_id'];
                                        $agent_description_self = $row['agent_description_self'];
                                        $agent_cnic  = $row['agent_cnic'];
                                        $tour_agent_status  = $row['tour_agent_status'];
                                        
                                        echo '<tr>
                                              <td>'.$tour_agent_id.'</td>
                                              <td>'.$agent_name.'</td>
                                              <td>'.$agent_cnic.'</td>
                                              <td>'.$agent_contact_no.'</td>
                                              <td>'.$agent_email.'</td>
                                              <td><a href="detailtouragent.php?tour_agent_id='.$tour_agent_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}

function activetouragent(){
	include '../includes/connection.php';
	 $activetouragent = mysqli_query($conn,"SELECT * FROM tour_agents WHERE tour_agent_status='0'");
                                if(mysqli_num_rows($activetouragent)>0){
                                    while($row = mysqli_fetch_array($activetouragent)){
                                          
                                          $tour_agent_id = $row['tour_agent_id'];
                                          $agent_name= $row['agent_name'];
                                          $agent_email= $row['agent_email'];
                                          $agent_contact_no  = $row['agent_contact_no'];
                                          $agent_address  = $row['agent_address']; 
                                          $user_type_id  = $row['user_type_id'];
                                          $agent_cnic  = $row['agent_cnic'];
                                          $tour_agent_status  = $row['tour_agent_status'];
                                          $record_date  = $row['record_date'];

                                        echo '<tr>
                                              <td>'.$tour_agent_id.'</td>
                                              <td>'.$agent_name.'</td>
                                              <td>'.$agent_cnic.'</td>
                                              <td>'.$agent_contact_no.'</td>
                                              <td><a href="detailtouragent.php?tour_agent_id='.$tour_agent_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}

function suspendedtouragent(){
	include '../includes/connection.php';
	 $suspendedtouragent = mysqli_query($conn,"SELECT * FROM tour_agents WHERE tour_agent_status='1'");
                                if(mysqli_num_rows($suspendedtouragent)>0){
                                    while($row = mysqli_fetch_array($suspendedtouragent)){
                                          
                                          $tour_agent_id = $row['tour_agent_id'];
                                          $agent_name= $row['agent_name'];
                                          $agent_email= $row['agent_email'];
                                          $agent_contact_no  = $row['agent_contact_no'];
                                          $agent_address  = $row['agent_address']; 
                                          $user_type_id  = $row['user_type_id'];
                                          $agent_cnic  = $row['agent_cnic'];
                                          $tour_agent_status  = $row['tour_agent_status'];
                                          $record_date  = $row['record_date'];

                                        echo '<tr>
                                              <td>'.$tour_agent_id.'</td>
                                              <td>'.$agent_name.'</td>
                                              <td>'.$agent_cnic.'</td>
                                              <td>'.$agent_contact_no.'</td>
                                              <td><a href="detailtouragent.php?tour_agent_id='.$tour_agent_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}
?>