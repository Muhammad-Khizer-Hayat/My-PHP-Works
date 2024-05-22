<?php
require_once "./includes/auth.php";
require_once "./includes/helpers.php";
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
  <meta charset="UTF-8">
  
  <?php require_once "./includes/css-links.php" ?>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
   <!-- navebar-include -->
   <?php require_once "./includes/navebar.php" ?>

     <?php require_once "./includes/sidebar.php" ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>view Customers</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              Id
                            </th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Mobile</th>
                            <th> Addres</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php
                         $sql= "SELECT * FROM customers";
                         $result= mysqli_query($con, $sql);

                         if(mysqli_num_rows($result) > 0 ){
                            while($row= mysqli_fetch_assoc($result)){

                           $id= $row['id'];
                         ?>

                          <tr>
                            <td>
                              <?php echo $row['id']  ?>  
                            </td>
                            <td>  <?php echo $row['name']  ?>  </td>
                            <td>
                            <?php echo $row['email']  ?>  
                            </td>
                            <td>
                            <?php echo $row['mobile']  ?>                              </td>
                            <td>  <?php echo $row['address']  ?>  </td>
                            <td>
                              <div class="badge badge-success badge-shadow">  <?php echo $row['status']  ?>  </div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
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
      <?php require_once "./includes/footer.php" ?>
    </div>
  </div>
  <?php require_once "./includes/javaScript-links.php" ?>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>