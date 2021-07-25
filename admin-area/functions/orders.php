<?php
function approvedorder(){
include '../includes/connection.php';
                            $checkTour = mysqli_query($conn,"SELECT * FROM tours inner join vehicles on tours.vehicle_type_id=vehicles.vehicle_id WHERE tour_status='1' AND vehicle_status='2'");
                           if(mysqli_num_rows($checkTour)>0){
                                while($row = mysqli_fetch_array($checkTour)){
                                        $tour_id = $row['tour_id'];
                                        $tour_name = $row['tour_name'];
                                        $tour_price = $row['tour_price'];
                                        $from_location = $row['from_location'];
                                        $to_location = $row['to_location'];
                                        $departure_time = $row['departure_time'];
                                        $video_link = $row['video_link'];
                                        $date_of_going = $row['date_of_going'];
                                        $date_of_coming = $row['date_of_coming'];
                                        $no_of_people = $row['no_of_people'];
                                        $no_of_places = $row['no_of_places'];
                                        $path = $row['path'];
                                        $stay_duration = $row['stay_duration'];
                                        $vehicle_type_id = $row['vehicle_type_id'];
                                        $user_type_id = $row['user_type_id'];
                                        //$tour_image_id = $row['tour_image_id'];
                                        $description = $row['description'];
                                        $hotel = $row['hotel'];
                                        $bone_fire = $row['bone_fire'];
                                        $food = $row['food'];
                                        $transportation = $row['transportation'];
                                        $tourist_guide_services = $row['tourist_guide_services'];
                                        $gardens = $row['gardens'];
                                        $payment = $row['payment'];
                                        $first_aids = $row['first_aids'];
                                        $tour_status = $row['tour_status'];
                                        $record_date = $row['record_date'];

                                        echo '<tr>
                                              <td>'.$tour_id.'</td>
                                              <td>'.$tour_name.'</td>
                                              <td>'.$from_location.'</td>
                                              <td>'.$to_location.'</td>
                                              <td>'.$tour_price.'</td>
                                              <td><a href="detailorder.php?tour_id='.$tour_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}

function pendingorder(){
include '../includes/connection.php';
                            $checkTour = mysqli_query($conn,"SELECT * FROM tours inner join vehicles on tours.vehicle_type_id=vehicles.vehicle_id WHERE tour_status='0' AND vehicle_status='2'");
                           if(mysqli_num_rows($checkTour)>0){
                                while($row = mysqli_fetch_array($checkTour)){
                                        $tour_id = $row['tour_id'];
                                        $tour_name = $row['tour_name'];
                                        $tour_price = $row['tour_price'];
                                        $from_location = $row['from_location'];
                                        $to_location = $row['to_location'];
                                        $departure_time = $row['departure_time'];
                                        $video_link = $row['video_link'];
                                        $date_of_going = $row['date_of_going'];
                                        $date_of_coming = $row['date_of_coming'];
                                        $no_of_people = $row['no_of_people'];
                                        $no_of_places = $row['no_of_places'];
                                        $path = $row['path'];
                                        $stay_duration = $row['stay_duration'];
                                        $vehicle_type_id = $row['vehicle_type_id'];
                                        $user_type_id = $row['user_type_id'];
                                        //$tour_image_id = $row['tour_image_id'];
                                        $description = $row['description'];
                                        $hotel = $row['hotel'];
                                        $bone_fire = $row['bone_fire'];
                                        $food = $row['food'];
                                        $transportation = $row['transportation'];
                                        $tourist_guide_services = $row['tourist_guide_services'];
                                        $gardens = $row['gardens'];
                                        $payment = $row['payment'];
                                        $first_aids = $row['first_aids'];
                                        $tour_status = $row['tour_status'];
                                        $record_date = $row['record_date'];

                                        echo '<tr>
                                              <td>'.$tour_id.'</td>
                                              <td>'.$tour_name.'</td>
                                              <td>'.$from_location.'</td>
                                              <td>'.$to_location.'</td>
                                              <td>'.$tour_price.'</td>
                                              <td><a href="detailorder.php?tour_id='.$tour_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}

function cancelorder(){
include '../includes/connection.php';
                            $checkTour = mysqli_query($conn,"SELECT * FROM tours inner join vehicles on tours.vehicle_type_id=vehicles.vehicle_id WHERE tour_status='2' AND vehicle_status='2'");
                           if(mysqli_num_rows($checkTour)>0){
                                while($row = mysqli_fetch_array($checkTour)){
                                        $tour_id = $row['tour_id'];
                                        $tour_name = $row['tour_name'];
                                        $tour_price = $row['tour_price'];
                                        $from_location = $row['from_location'];
                                        $to_location = $row['to_location'];
                                        $departure_time = $row['departure_time'];
                                        $video_link = $row['video_link'];
                                        $date_of_going = $row['date_of_going'];
                                        $date_of_coming = $row['date_of_coming'];
                                        $no_of_people = $row['no_of_people'];
                                        $no_of_places = $row['no_of_places'];
                                        $path = $row['path'];
                                        $stay_duration = $row['stay_duration'];
                                        $vehicle_type_id = $row['vehicle_type_id'];
                                        $user_type_id = $row['user_type_id'];
                                        //$tour_image_id = $row['tour_image_id'];
                                        $description = $row['description'];
                                        $hotel = $row['hotel'];
                                        $bone_fire = $row['bone_fire'];
                                        $food = $row['food'];
                                        $transportation = $row['transportation'];
                                        $tourist_guide_services = $row['tourist_guide_services'];
                                        $gardens = $row['gardens'];
                                        $payment = $row['payment'];
                                        $first_aids = $row['first_aids'];
                                        $tour_status = $row['tour_status'];
                                        $record_date = $row['record_date'];

                                        echo '<tr>
                                              <td>'.$tour_id.'</td>
                                              <td>'.$tour_name.'</td>
                                              <td>'.$from_location.'</td>
                                              <td>'.$to_location.'</td>
                                              <td>'.$tour_price.'</td>
                                              <td><a href="detailorder.php?tour_id='.$tour_id.'"><i class="fa fa-eye" style="font-size:24px"></i></a></td>
                                          </tr>';
                                        }
                                      }
}


?>