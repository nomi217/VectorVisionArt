<?php
include 'includes/header.php';
include 'includes/menubar.php';

?>
<div class="content-page">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Add Category Detail</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="index.php">Vector Vision</a></li>
            <li>Category</li>
             <li class="active">Add Category</li>
          </ol>
        </div>
      </div> 
        <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="text-white">Basic Information </h3>
        </div>
        <div class="panel-body">
          <div class="col-sm-12">
                  <form method="POST" action="actions/insert.php" enctype="multipart/form-data">
                    <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Category Name <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                      <input name="category_name" type="text" pattern="^[a-zA-z]+([\s][a-zA-Z]+)*$" title="Name Only Character" class="form-control" placeholder="Development" required="required" />
                    </div>
                    </div>
                      <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Category Description <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                     <textarea name="category_desc" id="category_desc" cols="19" rows="6" class="form-control" required="required"></textarea>
                    </div>
                    </div>
                       <input type="hidden" name="admin_id" value=<?php echo $admin_id;?> >
                <div class="text-center">
                  <button type="submit" class="btn btn-submit btn-primary" name="submit_category" >Submit</button>
                </div><br/>
        </form>
    </div>  
  </div>
</div>
<?php
include 'includes/footer.php';
include 'includes/rightsidebar.php';
?>