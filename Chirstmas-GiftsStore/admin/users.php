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
         <!-- view categories container -->
         <div class="container mt-3 bg-white p-4">
         <h3 style="color: blue;" > <i class="fa fa-plus " style="color: blue;"></i> Add Users</h3>
            <hr>

            <div class="d-flex justify-content-end">
            <a href="view-users.php" class="btn btn-primary text-white" style="color: blue;"><i class="fa fa-eye"></i> View Users</a>
            </div>

            <div class="form-container">  
                <form action="./users-qry.php" method="POST" enctype="multipart/form-data" class="row">
                  
                    <div class="col-lg-6 mb-2">
                        <label  class="form-label" for="name" style="color: blue;"  >Full Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="email" style="color: blue;"  >Email <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="text" style="color: blue;"  >Password <span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="image" style="color: blue;"  >Image <span class="text-danger">*</span>
                        </label>
                        <input type="file" class="form-control" id="image" name="image"  required>
                    </div>
                    <div class="col-lg-6 ">
                        <label class="form-label" for="text" style="color: blue;"  >Phone <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-6 ">
                        <label class="form-label" for="text" style="color: blue;"  >Address <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username" style="color: blue;"  >Description <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" class="form-control" id="" rows="1"></textarea>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-primary text-white btn-lg mt-2 w-100 "  type="submit" name="submit" value="signup"> <i class="fa fa-plus"></i> Add Users</button>
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