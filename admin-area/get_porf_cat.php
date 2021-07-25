<?php
require_once('db.php');
$country_id = mysql_real_escape_string($_POST['country_id']);
if($country_id!='')
{
$states_result = $conn->query('select * from product_category where cat_id='.$country_id.'');
$options = "<option value=''>Select Portfolio Category</option>";
while($row = $states_result->fetch_assoc()) {
$options .= "<option value='".$row['p_cat_id']."'>".$row['p_cat_title']."</option>";
}
echo $options;
}?>