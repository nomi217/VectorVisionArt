<?php
    include 'includes/session_check.php';
    include 'db/connection.php';
    $admin_panel_session_username = $_SESSION['admin_panel_session_username'];
    $admin_detail_query  = mysqli_query($con, "SELECT * from admin where `admin_username` ='$admin_panel_session_username'");
    $row  = mysqli_fetch_array($admin_detail_query);
    $admin_name = $row['admin_name'];
    $admin_email= $row['admin_email'];
    $admin_profile = $row['admin_img'];
    $contact_no = $row['admin_mobile'];
    $address = $row['admin_address'];
    $admin_id=$row['admin_id'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tourism is a tourist company">
        <meta name="author" content="Nauman Khalid">
        <link rel="shortcut icon" href="../assets/images/logo/Vector's-Logo-withouttext.png">

        <title>Vector Vision - Admin Dashboard</title>
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/Bootstrap-3.3.7/css/bootstrap.min.css">
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" />
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/DataTables-1.10.20/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/DataTables-1.10.20/css/jquery.dataTables.min.css">
        <link href="css/waves-effect.css" rel="stylesheet">
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
        <script src="js/modernizr.min.js"></script>
      
    </head>

    <body class="fixed-left">

        <div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><img src="../assets/images/Logo/Vector's-Logo-withouttext.png" style="height: 37px;width: 37px"></i> <span style="font-size: 16px">Vector Vision </span></a>
                    </div>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New Order</div>
                                                    <p class="m-0">
                                                       <small>You have <?php //echo $order; ?> New Orders</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New Owner</div>
                                                    <p class="m-0">
                                                       <small>There are total <?php //echo $owner; ?> new Owner Register</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Register</div>
                                                    <p class="m-0">
                                                       <small>There are total
                                                          <span class="text-primary"><?php //echo $users; ?></span> new Users Register</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                    <?php
                                    if (!$admin_profile == "") {
                                        echo '<img src="images/'.$admin_profile.'" class="thumb-lg img-circle img-thumbnail" alt="profile-image">';
                                    } 
                                        else{
                                             echo'<img src="images/placeholder_image.png" class="thumb-lg img-circle img-thumbnail" alt="profile-image">';
                                         }
                                    ?> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="lockscreen.php"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>