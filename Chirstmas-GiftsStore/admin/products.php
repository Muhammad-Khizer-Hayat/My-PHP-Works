<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>

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
     <!-- view products container -->
     <div class="container mt-3 bg-white p-4">
           <?php
         
            if (!empty($_SESSION['delete_msg'])) {
                $msg = $_SESSION['delete_msg'];
                echo " <div class='alert alert-success alert-dismissible fade show credErr'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                    </button> <strong>Congratulation! </strong> $msg</div>";
            }
            unset($_SESSION['delete_msg']);
           
           
           ?>
        
            <h3 style="color: blue;" > <i class="fa fa-eye " style="color: blue;" ></i> View Products</h3>
            <hr>

            <div class="d-flex justify-content-end mb-3">
                <a href="./add-products.php" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Add Proudcts</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Unit Price</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php  
                    
                    require_once("./config.php");
                    
                    $get_products = "SELECT products.*, categories.category FROM products 
                    LEFT JOIN categories 
                    ON products.category_id = categories.id";

                       $result = mysqli_query($con , $get_products);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $id= $row['category_id'];


                    ?>

                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['unit_price'] ?></td>
                            <td><?= $row['category'] ?></td>
                            <td><img src="./images/products/<?php echo $row['image'] ?>" alt="Products Image" height="60px"></td>
                            <td><span class="badge bg-success text-white p-1"><?=$row['status'] ?></span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit-products.php?id=<?=$id?>">Edit</a>
                                        <a class="dropdown-item" href="delete-products.php?id=<?=$id?>">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <?php 
                             }
                            } 
                        ?>

                    </tbody>
                </table>
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