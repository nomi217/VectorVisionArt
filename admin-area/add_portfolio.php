<?php
include 'includes/header.php';
include 'includes/menubar.php';
include("db/connection.php");
?> 

<div class="content-page">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Add Portfolio Detail</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="index.php">Vector Vision</a></li>
            <li>Portfolio</li>
             <li class="active">Add Portfolio </li>
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
                      <label class="col-sm-2" style="top: 6px">Portfolio Title <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                      <input id="port_title" name="portf_title" type="text" pattern="^[a-zA-z]+([\s][a-zA-Z]+)*$" title="Name Only Character" class="form-control" placeholder="WoodCraft" required="required" />
                    </div>
                    </div>
                     <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Select Main Category <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                       <select class="custom-select form-control" id="maincategory" name="maincategory">
                        <option selected="selected" disabled="disabled">Choose...</option>
                     <?php
                        $getcat="SELECT * FROM `category`";
                        $result=mysqli_query($con,$getcat);
                        while($row=mysqli_fetch_array($result)){
                        echo '<option value="'.$row['id'].'">'.$row['category_title'].'</option>'; 
                       }
                       ?>
                      </select>
                    </div>
                    </div>
                           <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Select Portfolio Category <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                       <select class="custom-select form-control" id="portfcategory" name="portfcategory">
                            <option value="">--Select Main Category First--</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Portfolio Image <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                      <input id="portf_image" name="portf_image" type="file" class="form-control" placeholder="Web Development" required="required" />
                    </div>
                    </div>
                    <div class="form-group row" style="margin-left: 40px;">
                      <label class="col-sm-2" style="top: 6px">Portfolio Description <small class="text-muted">(required) </small></label>
                      <div class="col-sm-7">
                     <textarea name="portf_desc" cols="19" rows="6" class="form-control" required="required"></textarea>
                    </div>
                    </div>
                       <input type="hidden" name="admin_id" value=<?php echo $admin_id;?>>
                <div class="text-center">
                  <button type='submit' class='btn btn-submit btn-primary' name='submit_portfolio' >Submit</button>
                </div><br/>
        </form>
    </div>  
  </div>
</div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script>

          $(document).ready(function(){
            $("#maincategory").on('change',function(){
                 var catid=$(this).val();
                 if(catid){
                 $.ajax({
                      url:'action.php',
                      method:"POST",
                      data:'catID='+catid,
                      success:function(data){
                        $("#portfcategory").html(data);
                      }
                 });
               }
               else{
                $('#portfcategory').html('<option value="">--Select Main Category First--</option>');
               }
            });
          });
        </script>
<?php
include 'includes/footer.php';
include 'includes/rightsidebar.php';
?>