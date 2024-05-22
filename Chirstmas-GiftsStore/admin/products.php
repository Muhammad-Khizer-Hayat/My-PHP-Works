<?php
require_once "./includes/auth.php";
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
<title> Products</title>
    <!-- Css-Links-Include -->
    <?php require_once "./includes/css-links.php"   ?>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- Navebar-Include -->
            <?php require_once "./includes/navebar.php"   ?>

            <!-- Sidebar-Include -->
            <?php require_once "./includes/sidebar.php"   ?>




            <!-- Main Content -->
            <div class="main-content">
                <!-- view products container -->
                <div class="container mt-2 p-4">
                    <section class="section">
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="text-primary-all"> <i class="fa fa-eye "></i> View Products</h3>
                                             <hr>
                                             <div class="d-flex justify-content-end">
                        <a href="./add-products.php" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Add Products</a>
                      </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped" id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">
                                                                ID
                                                            </th>
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

                                                        $result = mysqli_query($con, $get_products);

                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['category_id'];


                                                        ?>


                                                                <tr>
                                                                    <td><?= $row['id'] ?></td>
                                                                    <td><?= $row['name'] ?></td>
                                                                    <td><?= $row['unit_price'] ?></td>
                                                                    <td><?= $row['category'] ?></td>
                                                                    <td><img src="./images/products/<?php echo $row['image'] ?>" alt="Product Image" height="60px"></td>
                                                                    <td><span class="badge bg-success text-white p-1"><?= $row['status'] ?></span></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button type="button" class="btn btn-primary text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="edit-products.php?id=<?= $id ?>">Edit</a>
                                                                                <a class="dropdown-item" href="delete-products.php?id=<?= $id ?>">Delete</a>
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
                                </div>
                            </div>
                    </section>

                </div>


            </div>
            <!-- Footer-Include -->
            <?php require_once "./includes/footer.php"   ?>

        </div>
    </div>
    <!-- JavaScript-links-Include -->
    <?php require_once "./includes/javaScript-links.php"   ?>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>