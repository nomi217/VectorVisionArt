<?php
include 'includes/header.php';
include 'includes/menubar.php';

include "db/connection.php";

?> 

<div class="content-page">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Add Portfolio Category Detail</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="index.php">Vector Vision</a></li>
            <li>Portfolio Category</li>
             <li class="active">Add Portfolio Category</li>
          </ol>
        </div>
      </div>
        <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="text-white">Basic Information </h3>
        </div>
        <div class="panel-body">
          <div class="col-sm-12">
                  <form method="post" action="actions/insert.php" enctype="multipart/form-data">
                     <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Select Main Category <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                       <select class="custom-select form-control" id="main_category_name" name="main_category_name">
                        <option selected="selected" disabled="disabled">Choose...</option>
                     <?php
                      include("db/connection.php");
            $getcat="SELECT * FROM `category` ORDER BY category_title";
            $result=mysqli_query($con,$getcat);
            while($row=mysqli_fetch_assoc($result)){
          $cat_id=$row['id'];
        $cat_title=$row['category_title'];
        echo "
        <option value='$cat_id'> $cat_title </option>
        ";
        }
        ?>
                      </select>
                    </div>
                    </div>
                    <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Portfolio Category Name <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                      <input id="portf_category_name" name="portf_category_name" type="text" pattern="^[a-zA-z]+([\s][a-zA-Z]+)*$" title="Name Only Character" class="form-control" placeholder="Web Development" required="required" />
                    </div>
                    </div>
                                        <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Portfolio Category Description <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                     <textarea name="portf_cat_desc" cols="19" rows="6" class="form-control" required="required"></textarea>
                    </div>
                    </div>
                       <input type="hidden" name="admin_id" value=<?php echo $admin_id;?>>
                <div class="text-center">
                  <button type="submit" class="btn btn-submit btn-primary" name="submit_pro_category" >Submit</button>
                </div><br/>
        </form>
    </div>  
  </div>
</div>
<?php
include 'includes/footer.php';
include 'includes/rightsidebar.php';
?>