<?php
include 'includes/header.php';
include 'includes/menubar.php';
include 'functions/view_pro_category.php';
?>
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">View Portfolio Category</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Vector Vision</a></li>
                        <li><a href="#">View Portfolio Category</a></li>
                        <li class="active">View Portfolio Category</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">View Portfolio Category</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="cdatatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col" style="width: 130px;">Portfolio Category</th>
                                                <th scope="col">Portfolio Category Description</th>
                                                <th scope="col" style="width: 110px;"> Main Category</th>
                                                <th scope="col"> Admin </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                           <?php
                                      getprocategory();
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
