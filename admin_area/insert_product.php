<?php

 include('../includes/connect.php');
 if(isset($_POST['insert_product'])){
   $product_title=$_POST['product_title'];
   $description=$_POST['description'];
   $product_keywords=$_POST['product_keywords'];
   $product_category=$_POST['product_category'];
   $product_brands=$_POST['product_brands'];
   $product_price=$_POST['product_price'];
   $product_status='true';

   /* Accessing image */
   $product_image=$_FILES['product_image']['name'];
   /* Accessing image tmp name */
   $temp_image=$_FILES['product_image']['tmp_name'];
   /* store images */
   move_uploaded_file($temp_image,"./product_images/$product_image");
   /* Insert Query */
   $insert__products="insert into `products` (product_title, product_description, product_keywords, category_id, 
   brand_id, product_image, product_price, date, status) values('$product_title','$description','$product_keywords','$product_category',
   '$product_brands','$product_image','$product_price',NOW(),'$product_status')";
   $result_query=mysqli_query($con,$insert__products);
   if($result_query){
    echo "<script>alert('Successfully Inserted The Products')</script>";
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- front awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</Title></label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter Product Title" autocomplete="off"
                required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</Title></label>
                <input type="text" name="description" id="description" class="form-control" 
                placeholder="Enter Product Description" autocomplete="off"
                required="required">
            </div>
            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</Title></label>
                <input type="text" name="product_keywords" id="product  _keywords" class="form-control" 
                placeholder="Enter Product Keywords" autocomplete="off"
                required="required">
            </div>
            <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select A Category</option>
                    <?php

                     $select_query="Select *from categories";
                     $result_query=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_array($result_query)){
                          $category_title=$row['category_title'];
                          $category_id=$row['category_id'];
                          echo"<option value='$category_id'>$category_title</option>";
                          }


                    ?>
                    
                </select>
            </div>
            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select" >
                    <option value="">Select A Brand</option>
                    <?php

                     $select_query="Select *from brands";
                     $result_query=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_array($result_query)){
                          $brand_title=$row['brand_title'];
                          $brand_id=$row['brand_id'];
                          echo"<option value='$brand_id'>$brand_title</option>";
                          }


                    ?>
                    
                </select>
            </div>
            <!-- Images -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product Image</Title></label>
                <input type="file" name="product_image" id="product_image" class="form-control" 
                 required="required">
            </div>
            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</Title></label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter Product Price" autocomplete="off"
                required="required">
            </div>
            <!-- Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-secondary">
        </form>
    </div>
    
</body>
</html>