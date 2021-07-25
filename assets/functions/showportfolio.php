<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
        /* Media Query for Mobile Devices */ 
        @media (max-width: 480px) { 
        #image-adjustment{
    height: 350px;
}

        } 
 @media (min-width: 481px) and (max-width: 767px) { 
          #image-adjustment{
    height: 370px;
    width: 560px;
}
}
       /* Media Query for Tablets Ipads portrait mode */ 
        @media (min-width: 768px) and (max-width: 1024px){ 
                #image-adjustment{
    height: 385px;
    width: 560px;
}
        } 

           /* Media Query for Laptops and Desktops */ 
        @media (min-width: 1025px) and (max-width: 1280px){ 
 #image-adjustment{
height:400px;width:560px;
}
   } 

        
    </style>
</head>
<body>
  <?php

function showportf(){
  include("admin-area/db/connection.php");
  $show_pro="SELECT category_title,p_cat_title,p_id,p_title,p_img,p_desc FROM product p JOIN category c on p.cat_id=c.id JOIN product_category pcat on p.p_cat_id=pcat.p_cat_id order by 1 DESC LIMIT 0,6";
  $result=mysqli_query($con,$show_pro);
  while($row=mysqli_fetch_array($result)){
                  $p_id=$row['p_id'];
                      $p_title=$row['p_title'];
                      $p_img=$row['p_img'];
                      $p_desc=$row['p_desc'];
                      $category_title=$row['category_title'];
                      $p_cat_title=$row['p_cat_title'];
    echo "
    <div class='masonry__brick' data-aos='fade-up'>
                        <div class='item-folio'>
                                
                            <div class='item-folio__thumb'>
                                <a href='admin-area/images/portfolio_images/$p_img' class='thumb-link' title=$p_title data-size='1050x700'>
                                    <img src='admin-area/images/portfolio_images/$p_img'
                                         srcset='admin-area/images/portfolio_images/$p_img 1x, admin-area/images/portfolio_images/$p_img 2x' alt='' id='image-adjustment' class = 'img-responsive' >
                                </a>
                            </div>
    
                            <div class='item-folio__text'>
                                <h3 class='item-folio__title'>
                                    $p_title
                                </h3>
                                <p class='item-folio__cat'>
                                    $p_cat_title
                                </p>
                            </div>
    
                            <!--<a href='#' class='item-folio__project-link' title='Project link'>
                                <i class='icon-link'></i>
                            </a>-->
    
                            <div class='item-folio__caption'>
                                <p align='justify'>$p_desc</p>
                            </div>
    
                        </div>
                    </div>";
  }
}
?>

</body>
    </html>


