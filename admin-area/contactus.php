<?php
include 'includes/header.php';
include 'includes/menubar.php';
include 'functions/contactus.php';
?>
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Contact Us Message</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Vector Vision</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li class="active">Contact Us Message</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contact Us Message</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="cdatatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" width="68px">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col" width="90px">Subject</th>
                                                <th scope="col">Message</th>
                                                <th scope="col" width="115px">Time</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                           <?php
                                      getcontact();
                                      ?>
                                    </tbody>
                                </table>
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
<script type="text/javascript">
    $("#cdatatable").dataTable();
    
</script>
