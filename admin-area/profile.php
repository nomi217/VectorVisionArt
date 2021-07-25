<?php
include 'includes/header.php';
include 'includes/menubar.php';
?>

<?php
$checkTour = mysqli_query($con,"SELECT * FROM admin where `admin_username` ='$admin_panel_session_username'");
$row  = mysqli_fetch_array($checkTour);
            $a_id = $row['admin_id'];
            $a_name = $row['admin_name'];
            $a_email = $row['admin_email'];
            $a_username = $row['admin_username'];
            $a_pass = $row['admin_password'];
            $contact_no = $row['admin_mobile'];
            $address = $row['admin_address'];
            $admin_profile = $row['admin_img'];
?>
            <div class="content-page">
                <div class="content">
                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('images/big/bg.jpg')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <?php
                                    if (!$admin_profile == "") {
                                        echo '<img src="images/'.$admin_profile.'" class="thumb-lg img-circle img-thumbnail" alt="profile-image">';
                                    } 
                                        else{
                                            echo'<img src="images/placeholder_image.png" class="thumb-lg img-circle img-thumbnail" alt="profile-image">';
                                        }
                                    ?>
                                    <h3 class="text-white"><?php echo $a_name; ?></h3>
                                    <h3 class="text-white">@<?php echo $a_username; ?></h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">About Me</span> 
                                </a> 
                            </li> 
                            <li class="tab" > 
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                    <span class="hidden-xs">Settings</span> 
                                </a> 
                            </li> 
                        <div class="indicator"></div></ul> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">                         
                        <div class="tab-content profile-tab-content"> 
                            <div class="tab-pane active" id="home-2"> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Personal Information</h3> 
                                            </div>  
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $a_name; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $contact_no; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $a_email; ?></p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Location</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $address; ?></p>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                            <div class="tab-pane" id="settings-2">
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Edit Profile</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form method="post" action="actions/update.php" enctype="multipart/form-data" class="form-horizontal">
                                             <div class="form-group">
                                              <label>Upload Your Image (only jpg,jpeg,png are allowed):</label>
                                                <input type="file" id="c_image" name="c_image" class="form-control" style="width:100%;height: 100%; border:0;">
                                            </div>
                                            <div class="form-group">
                                                <label for="a_name">Full Name</label>
                                                <input type="hidden" name="a_id" value="<?php echo $a_id; ?>">
                                                <input type="text" value="<?php echo $a_name; ?>" id="a_name" class="form-control" name="a_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" value="<?php echo $a_email; ?>" id="Email" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="Contact No.">Phone Number</label>
                                                <input type="text" value="<?php echo $contact_no; ?>" id="contact_no" class="form-control" name="contact_no">
                                            </div>
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <input type="text" value="<?php echo $address; ?>" id="Address" class="form-control" name="address">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" value="<?php echo $a_pass; ?>" id="password" class="form-control" name="password" >
                                            </div>
                                            <div  class="col-sm-3">
                                              <div class="form-group">
                                                <button type="submit" name="updateprofile" class="btn btn-primary btn-block">Update Profile</button>
                                            </div>
                                            </div>
                                        </form>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php
include 'includes/footer.php';
include 'includes/rightsidebar.php';
?>