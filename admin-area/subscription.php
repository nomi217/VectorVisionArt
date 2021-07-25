<?php
include 'includes/header.php';
include 'includes/menubar.php';
include 'functions/subscription.php';
?>
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Subscription</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Vector Vision</a></li>
                        <li><a href="#">Subscription</a></li>
                        <li class="active">Subscription</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Subscription</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="cdatatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Subscribe Email</th>
                                                <th scope="col">Time</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                           <?php
                                      getsubscribeemail();
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
