<?php
    $admin_detail_query  = mysqli_query($con, "SELECT * from admin where admin_username ='$admin_panel_session_username'");
    $row  = mysqli_fetch_array($admin_detail_query);
    $admin_name = $row['admin_name'];
?>

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <?php
                                    if (!$admin_profile == "") {
                                        echo '<img src="images/'.$admin_profile.'" class="thumb-md img-circle img-thumbnail" alt="profile-image">';
                                    } 
                                        else{
                                            echo'<img src="images/placeholder_image.png" class="thumb-md img-circle img-thumbnail" alt="profile-image">';
                                        }
                                    ?>
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?php echo $admin_name ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="lockscreen.php"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect" ><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-list"></i><span> Category </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_category.php">Add Category</a></li>
                                    <li><a href="view_category.php">View Category</a></li>
                                  <!--   <li><a href="#" onclick="alert('Coming Soon!');">Updated Category</a></li>
                                    <li><a href="#" onclick="alert('Coming Soon!');">Deleted Category</a></li> -->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-list"></i><span> Portfolio Category </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_pro_category.php">Add Portfolio Category </a></li>
                                    <li><a href="view_pro_category.php">View Portfolio Category</a></li>
                                 <!--    <li><a href="#" onclick="alert('Coming Soon!');">Updated Product Category</a></li>
                                    <li><a href="#" onclick="alert('Coming Soon!');">Deleted Product Category></a></li>
                                --> </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i><img src="images/laptop-code-solid-new.png" style="height: 18px;width: 20px"></i> <span> Portfolio </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_portfolio.php">Add Portfolio</a></li>
                                    <li><a href="view_portfolio.php">View Portfolio</a></li>
                                    <!-- <li><a href="#" onclick="alert('Coming Soon!');">Updated Portfolio</a></li>
                                    <li><a href="#" onclick="alert('Coming Soon!');">Deleted Portfolio</a></li>
                                 --></ul>
                            </li>
                              <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-email"></i> <span> Subscriptions </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="subscription.php">View Subscribe Email</a></li>
                                </ul>
                            </li>                             
                              <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-contacts"></i> <span> Contact Us </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="contactus.php">View Messages</a></li>
                                </ul>
                            </li> 
                                <li>
                                <a href="logout.php" class="waves-effect"><i class="md md-exit-to-app"></i><span> LogOut </span></a>
                            </li>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 


