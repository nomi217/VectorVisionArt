<?php
	//this file includess all types of customs functions
	date_default_timezone_set("Asia/Karachi");
	function convert_date($date){
		$str = date('d-m-Y',strtotime($date));
		return $str;
	}
    function current_time(){
        //$str = date('d-m-Y',strtotime($date));
        $time = date("h:i:s");
        return $time;
    } 
    function current_date(){
        //$str = date('d-m-Y',strtotime($date));
        $date = date("Y-m-d");
        return $date;
    } 

	function sql_timeconvert($str){
		$str =  date("H:i", strtotime($str));
		return $str;
	}
	function sql_dateconvert($sql){
		// $date = str_replace("/", "-",$str);
		$date = date("Y-m-d",strtotime($sql));
		return str_replace("/", "-",$date);
	}
	  //it will connvert the database time and date into am and pm human readable format .. 
             function human_timedate($date){
                   $time=substr ($date,11);
                    $time_in_12_hour_format  = date("g:i a", strtotime($time));
                    $dt = trim(substr($date,0,10)); 
                    list($year,$month,$day) = explode("-",$dt);
                    $finalDate = $day."/".$month."/".$year;
                    $time_date = $finalDate." ".$time_in_12_hour_format;
                    return $time_date; 
              } 
             function current_dateTime(){
             	 return date("l, d-m-Y h:i:sa");
             } 	
             
               //used in calculations 
             function perItemPrice($totalAmount,$quantity){ //items, with quantity
             			return round($totalAmount/$quantity,2);
             }

             function checkddate($str){
             		if($str=="0000-00-00"){
             			$str = "";
             		}
             		return $str;
             }

                //this function will generate the unique id throughout the timestamp
                function generate_unique_id(){
                    $now = new DateTime();
                    return $now->getTimestamp(); 
                }
                
                 function dateDifference($date1, $date2)
                {
                                    
                                  $start = strtotime($date1);
$end = strtotime($date2);

$days_between = ceil(abs($end - $start) / 86400);

                                  //  $diff = abs($date1 - $date2);
                                    // $day = $diff/(60*60*24); // in day
                                    // $dayFix = floor($day);
                                    // $dayPen = $day - $dayFix;
                                    // if($dayPen > 0)
                                    // {
                                    // // $hour = $dayPen*(24); // in hour (1 day = 24 hour)
                                    // // $hourFix = floor($hour);
                                    // // $hourPen = $hour - $hourFix;
                                    // // if($hourPen > 0)
                                    // // {
                                    // // $min = $hourPen*(60); // in hour (1 hour = 60 min)
                                    // // $minFix = floor($min);
                                    // // $minPen = $min - $minFix;
                                    // // if($minPen > 0)
                                    // // {
                                    // // $sec = $minPen*(60); // in sec (1 min = 60 sec)
                                    // //   $secFix = floor($sec);
                                    // // }
                                    // // }
                                    // }
                                  //  $str = "N/A";
                                    // if($days_between > 1)
                                         $str= $days_between;
                                     //else if($days_between == 1){
                                       //      $str= $days_between." day";
                                     //}
                                    // if($hourFix > 0)
                                    // $str.= $hourFix." hour ";
                                    // if($minFix > 0)
                                    // $str.= $minFix." min ";
                                    // // if($secFix > 0)
                                    // // $str.= $secFix." sec ";
                                    return $str;
                                }
?>