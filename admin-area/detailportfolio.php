<?php
include 'includes/header.php';
include 'includes/menubar.php';
?>
<div class="content-page">
    <div class="content">
        <div class="container">
<?php

if(isset($_GET['p_id'])){
    $p_id = $_GET['p_id'];
}

?>
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Portfolio Detail</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Vector Vision</a></li>
                    <li class="active">Portfolio Detail</li>
                </ol>
            </div>
        </div>
        <div class="container">

          <?php
          $checkportfolio = mysqli_query($con,"SELECT category_title,p_cat_title,p_id,p_title,p_img,p_desc,admin_name,date FROM product p JOIN category c on p.cat_id=c.id JOIN product_category pcat on p.p_cat_id=pcat.p_cat_id JOIN admin a on p.admin_id=a.admin_id");
          if(mysqli_num_rows($checkportfolio)>0){
              while($row = mysqli_fetch_array($checkportfolio)){
                      $p_id=$row['p_id'];
                      $p_title=$row['p_title'];
                      $p_img=$row['p_img'];
                      $p_desc=$row['p_desc'];
                      $category_title=$row['category_title'];
                      $p_cat_title=$row['p_cat_title'];
                      $admin_name=$row['admin_name'];
                      $date=$row['date'];
                   }
                  }
                  ?>
         <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="text-white">Portfolio Info</h3>
        </div>
        <div class="panel-body">
          <div class="row">
          <div class="col-sm-9">
                  <div class="form-group">
                      <label>Portfolio Title</label>
                    <div>
                 <?php echo $p_title; ?>
                   </div>
                  </div></div></div>
                    <div class="col-sm-9">
                    <div class="form-group" style="padding-top: -40%">
                      <label>Description</label>
                      <div align="justify">
                        <?php echo $p_desc; ?>
                     </div>
                   </div>
                  </div>
                                      <div style="margin-left: 77%;margin-top:-50px">
                 <?php echo "<img class='img-responsive' src='images/portfolio_images/$p_img' style='height:190px;box-shadow:0 0 5px 5px rgba(0,0,0,0.3); border-radius:7px'>" ?>
                   </div>
              </div>
               <div class="panel panel-success">
              <div class="panel-heading">
                  <h3 class="text-white">Main Category Info</h3>
              </div>
              <div class="panel-body">
                <div class="col-sm-12">
                  <div class="form-group">
                      <label>Main Category Name</label>
                    <div>
                 <?php echo $category_title; ?>
                   </div>
                  </div>
              </div>
        </div>

         <div class="panel panel-success">
              <div class="panel-heading">
                  <h3 class="text-white">Portfolio Category Info</h3>
              </div>
              <div class="panel-body">
                <div class="col-sm-12">
                  <div class="form-group">
                      <label>Portfolio Category Name</label>
                    <div>
                 <?php echo $p_cat_title; ?>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="panel panel-success">
              <div class="panel-heading">
                  <h3 class="text-white">Admin Info</h3>
              </div>
              <div class="panel-body">
                <div class="col-sm-12">
                  <div class="form-group">
                      <label>Admin Name</label>
                    <div>
                 <?php echo $admin_name; ?>
                   </div>
                  </div>
              </div>
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