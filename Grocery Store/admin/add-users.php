<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>add-users</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">




        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-plus text-success"></i> Add Users</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./view-users.php" class="btn btn-success text-white"><i class="fa fa-eye"></i> View Users</a>
            </div>

            <div class="form-container">  
                <form action="./add-users-qry.php" method="POST" enctype="multipart/form-data" class="row">
                  
                    <div class="col-lg-6 mb-2">
                        <label  class="form-label" for="name">Full Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="email">Email <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="text">Password <span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="image">Image <span class="text-danger">*</span>
                        </label>
                        <input type="file" class="form-control" id="image" name="image"  required>
                    </div>
                    <div class="col-lg-6 ">
                        <label class="form-label" for="text">Mobile <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-6 ">
                        <label class="form-label" for="text">Address <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username">Description <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" class="form-control" id="" rows="1"></textarea>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-success text-white btn-lg mt-2 w-100 "  type="submit" name="submit" value="signup"> <i class="fa fa-plus"></i> Add Users</button>
                    </div>

                </form>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




</body>

</html>