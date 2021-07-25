<?php

function totalvehicle(){
include '../includes/connection.php';

	 $totalvehicle = mysqli_query($conn,"SELECT * FROM `vehicles` inner join vehicle_owners on vehicles.owner_id=vehicle_owners.owner_id");
                            if(mysqli_num_rows($totalvehicle)>0){
                                while($row = mysqli_fetch_array($totalvehicle)){
                                  
                                        $vehicle_id  = $row['vehicle_id'];
                                        $model= $row['model'];
                                        $color= $row['color'];
                                        $seater  = $row['seater'];
                                        $engine_capacity  = $row['engine_capacity']; 
                                        $reg_no  = $row['reg_no'];
                                        $vehicle_name  = $row['vehicle_name'];
                                        $company_name = $row['company_name'];
                                        $owner_id  = $row['owner_id'];
                                        $vehicle_status  = $row['vehicle_status'];
                                        $record_date  = $row['record_date'];

                                        $owner_name = $row['owner_name'];                                                                                 
                                        echo '<tr>
                                              <td>'.$vehicle_id.'</td>
                                              <td>'.$owner_name.'</td>
                                              <td>'.$vehicle_name.'</td>
                                              <td>'.$reg_no.'</td>
                                              <td>'.$company_name.'</td>
                                              <td>'.$seater.'</td>
                                              <td><a href="detailvehicle.php?vehicle_id='.$vehicle_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
                                    }
                            
?>