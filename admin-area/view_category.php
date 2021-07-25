<?php
include 'includes/header.php';
include 'includes/menubar.php';
include 'functions/viewcategory.php';
?>
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">View Category</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Tourism</a></li>
                        <li><a href="#">View Category</a></li>
                        <li class="active">View Category</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">View Category</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="cdatatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col" style="width: 100px;">Category Title</th>
                                                <th scope="col">Category Description</th>
                                                <th scope="col">Admin</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                           <?php
                                      getcategory();
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
