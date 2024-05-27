<?php

//  $targetDir = "categories";
//  echo $targetDir = __FILE__ . "/images/$targetDir/"; exit;
// exit;


require_once("./config.php");
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "<pre>"; print_r($_POST);
    // echo "<pre>"; print_r($_FILES['image']); 
    //exit;

    $category = $_POST['category'];

    // upload image
    $data = uploadImage("categories", $_FILES['image'], 3, "categories");

    // print_r($data); exit;
    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];
        $query = "INSERT INTO `courses_categories`(`category`, `image`) VALUES('$category', '$name')";

        if (mysqli_query($con, $query)) {

            $_SESSION['success'] = "Category has been added successfully...!";
        } else {
            $_SESSION['error'] = "Category has not been added...!";
        }
    }
}


//exit;

?>




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
        <!-- add category container -->
  <div class="container mt-3 bg-white p-4">

<div class="row">
    <div class="col-md-4">
        <h3 style="color: blue;"> <i class="fa fa-plus " style="color: blue;"></i> Add Course Category</h3>
    </div>
    <div class="col-md-8">
        <?php

        if (!empty($_SESSION['success'])) {
            $msg = $_SESSION['success'];
            echo " <div class='alert alert-success alert-dismissible fade show credErr'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                </button> <strong>Congratulation! </strong> $msg</div>";
        }
        unset($_SESSION['success']);


        if (!empty($_SESSION['error'])) {
            $msg = $_SESSION['error'];
            echo " <div class='alert alert-danger alert-dismissible fade show credErr'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                </button> <strong>Warning! </strong> $msg</div>";
        }
        unset($_SESSION['error']);

        if (!empty($_SESSION['imgErr'])) {
            $msg = $_SESSION['imgErr'];
            echo " <div class='alert alert-danger alert-dismissible fade show credErr'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                </button> <strong>Warning! </strong> $msg</div>";
        }
        unset($_SESSION['imgErr']);

        ?>
    </div>
</div>
<hr>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="row">

    <div class="col-lg-4">
        <label class="form-label" for="val-username" style="color: blue; font-weight: bold;  ">Category <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="val-username" name="category" placeholder="Enter here..." required>
    </div>


    <div class="col-lg-4">
        <label class="form-label" for="userimage" style="color:blue ; font-weight: bold;  " >Category Image <span class="text-danger">*</span>
        </label>
        <input type="file" class="form-control" id="userimage" name="image" accept="image/*" required>
    </div>


    <div class="col-lg-4">
        <label for=""></label>

        <button class="btn btn-primary text-white btn-lg mt-2 w-100"  ><i class="fa fa-plus"></i> Add Category</button>
    </div>

</form>
</div>
 <!-- view categories container -->
 <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-eye text-success"></i> View Categories</h3>
            <hr>


            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $select = "SELECT * FROM courses_categories";
                        $result = mysqli_query($con, $select);

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {

$id=$row['id'];
                        ?>
                                <tr>
                                    <td><?php echo $row['category'] ?></td>
                                    <td><img src="./images/categories/<?php echo $row['image'] ?>" height="50px" alt=""></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="./edit-category.php?id= <?=$id?>">Edit</a>
                                                <a class="dropdown-item" href="delete-products.php?id=<?=$id?>">Delete </a>
                                              
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
   <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".uploadingErr").hide();
            }, 3000);


            setTimeout(function() {
                $(".credErr").hide();
            }, 3000);

        })
    </script>

 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>