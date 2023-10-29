<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashborad</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- front awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- FIRST -->
    <div class="container-fluid P-0">
         <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
         <a class="nav-link active" aria-current="page" href="#">Home</a>
         <a class="nav-link" href="#">Features</a>
         <a class="nav-link" href="#">Pricing</a>
         <a class="nav-link disabled" aria-disabled="true">Disabled</a>
         </div>
         </div>
         </div>
         </nav>
     <!-- SECOND -->
     <div class="bg-light">
         <h3 class="text-center p-2">All Products</h3>
     </div>
     <!-- THIRD -->
     <div class="row">
        <div class="col-md-12 bg-secondary p-1 ">
            <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link Text-light 
                    bg-light my-1">Insert Products</a></button>
                    
                    <button><a href="index.php?insert_category" class="nav-link Text-light 
                    bg-light my-1">Insert Categories</a></button>
                    
                    <button><a href="index.php?insert_brands" class="nav-link Text-light 
                    bg-light my-1">Insert Brands</a></button>
                    
                    
            </div>

        </div>
     </div>
    </div>

     <!-- Fourth -->
     <div class="container my-5">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }
        
        ?>
     </div>
    
<!-- bootstrap jss link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>