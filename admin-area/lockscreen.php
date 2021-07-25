<?php
    include 'includes/session_check.php';
    include 'includes/connection.php';
    $admin_panel_session_username = $_SESSION['admin_panel_session_username'];
    $admin_detail_query  = mysqli_query($conn, "select * from admin where a_username ='$admin_panel_session_username'");
    $row  = mysqli_fetch_array($admin_detail_query);
    $admin_name = $row['a_name'];
    $admin_email= $row['a_email'];
    $user_type= $row['user_type_id'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="images/favicon_1.ico">
        <title>Tourism - Admin Dashboard</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/waves-effect.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/modernizr.min.js"></script>
    </head>
    <body>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white">&nbsp;</h3>
                </div> 
                <div class="panel-body" style="padding-top:0px;">
                 <form method="post" action="index.php" role="form" class="text-center"> 
                    <div class="user-thumb"> 
                        <img src="images/avatar-1.jpg" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
                    </div> 
                    <div class="form-group"> 
                        <h3><?php echo $admin_name; ?></h3> 
                        <p class="text-muted">Enter your password to access the admin.</p> 
                        <div class="input-group m-t-30"> 
                            <span class="input-group-btn"> <button type="submit" class="btn btn-success btn-lg waves-effect waves-light">Log In</button> </span> 
                        </div> 
                    </div> 
                    <div class="text-right">
                        <a href="../../login.php">Not <?php echo $admin_name; ?> ?</a>
                    </div>
                </form>         
                </div>                                  
            </div>
        </div>
    	<script>
            var resizefunc = [];
        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>
        <script src="js/jquery.app.js"></script>
	</body>
</html>