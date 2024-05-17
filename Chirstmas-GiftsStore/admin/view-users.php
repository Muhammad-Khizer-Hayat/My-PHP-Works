<?php
   require_once("./includes/helpers.php");
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
      <!-- view categories container -->
      <!-- view-categories -->
<div class="container mt-4  p-4">
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  <h3 style="color: blue;" > <i class="fa fa-eye " style="color: blue;" ></i> View Users</h3>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                          <th>#</th>
                          <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                    
                    require_once("./config.php");
                 
                    
                    $get_users = "SELECT * FROM users"; 
                   

                       $result = mysqli_query($con , $get_users);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){


                    ?>
                          <tr>
                         <td> <?= $row['id'] ?></td>
                            <td><img src="images/users/<?php echo $row['image'] ?>" alt="users Image" height="60px"></td>
                            <td ><?= $row['username'] ?></td>
                            <td ><?= $row['email'] ?></td>
                            <td ><?= $row['phone'] ?></td>
                            <td ><?= $row['address'] ?></td>
                            <td ><?= $row['role'] ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Edit</a>
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
   <?php  require_once "./includes/footer.php"   ?>

    </div>
  </div>
   <!-- JavaScript-links-Include -->
   <?php  require_once "./includes/javaScript-links.php"   ?>
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>