<?php

include('../includes/connect.php');

if(isset($_POST['insert_brands'])){
  $brand_title=$_POST['brands_title'];

  /* select data from database */
  $select_query="Select *from brands where brand_title='$brand_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('Already Exists')</script>";
  }else{

  
  $insert_query="insert into brands (brand_title) values ('$brand_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('Brand has been inserted successfully')</script>";
   } }
}



?>




<form action="" method="post" clas="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipts"></i></span>
  <input type="text" class="form-control" name="brands_title" placeholder="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="form-control bg-light" name="insert_brands" value="Insert Brands">
</div>
</form>