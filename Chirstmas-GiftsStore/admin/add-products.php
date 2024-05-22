<?php
require_once "./includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
<title> Add-Products</title>
   <!-- Css-Links-Include -->
<?php  require_once "./includes/css-links.php"   ?>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!-- Navebar-Include -->
      <?php  require_once "./includes/navebar.php"   ?>

       <!-- Sidebar-Include -->
       <?php  require_once "./includes/sidebar.php"   ?>



    
      <!-- Main Content -->
      <div class="main-content">
      
 <!-- view categories container -->
 <div class="container mt-3 bg-dark p-4">
            <h3 class="text-primary-all" > <i class="fa fa-plus "></i> Add Products</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="products.php" class="btn btn-primary text-white" style="color: blue;"><i class="fa fa-eye"></i> View Proudcts</a>
            </div>

            <div class="form-container">
                <form action="./insert-product-qry.php" method="POST" enctype="multipart/form-data" class="row">

                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="name" style="color: blue;" >Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="unit_price" style="color: blue;" >Unit Price <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" placeholder="Enter here..." required>
                    </div>



                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="category" style="color: blue;" >Category <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="category" id="category">
                        <option value="-1">Choose here</option>
                            <!-- fetch category from category table -->
                            <?php
                            require_once "./config.php";

                            $select = "SELECT * FROM categories";
                            $result = mysqli_query($con, $select);

                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row['id'] ?>"> <?php echo $row['category'] ?>  </option>

                            <?php  } } ?>
                        </select>
                    </div>



                    <div class="col-lg-6 ">
                        <label class="form-label" for="quantity" style="color: blue;" >Quantity <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="image" style="color: blue;" >Image <span class="text-danger">*</span>
                        </label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username" style="color: blue;" >Description <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" class="form-control" id="" rows="5"></textarea>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-primary text-white btn-lg mt-2 w-100"> <i class="fa fa-plus"></i> Add Product</button>
                    </div>

                </form>
            </div>

        </div>


      
      </div>
   <!-- Footer-Include -->
   <?php  require_once "./includes/footer.php"   ?>

    </div>
  </div>
   <!-- JavaScript-links-Include -->
   <?php  require_once "./includes/javaScript-links.php"   ?>
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>