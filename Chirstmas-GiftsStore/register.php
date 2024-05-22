



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regestration_Form</title>
     <!-- css links include -->
     <?php require_once("./includes/css-links.php") ?>

</head>
<body class="container ">
<section class=" py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 ">
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



?>

          <div class="card border  border-l ight-subtle rounded-3 shadow-lg">
            <div class="card-body  p-xl-4">
              <div class="text-center mb-3">
                <a href="#!">
                </a>
              </div>
              <h3 class=" fw-normal text-center text-primary mb-4"><strong>Regestration-Form</strong></h3>
              <form method="POST" action="./register-qry.php">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-md-6 mt-1">
                    
                  <div data-mdb-input-init class="form-outline">
                  <label class="form-label">Name*</label>
                    <input type="text"  class="form-control" name="name" placeholder="Enter Your Name" required />
                     </div>
            
                  </div>
                  <div class="col-md-6 mb-3">
                  <div data-mdb-input-init class="form-outline">
                  <label class="form-label">Mobile*</label>
                    <input type="text" class="form-control"  data-inputmask="'mask': '9999-9999999'"   name="mobile" placeholder="XXXX-XXXXXXX" required  >
                    </div>                    
                  </div>
                  <div class="col-md-6 mb-3">
                  <div data-mdb-input-init class="form-outline">
                  <label class="form-label">E-mail*</label>
                    <input type="text" class="form-control"     name="email" placeholder="Enter here....." required  >
                    </div>                    
                  </div>
                  <div class="col-md-6 mb-3">
                  <div data-mdb-input-init class="form-outline">
                  <label class="form-label">Password*</label>
                    <input type="text" class="form-control"    name="password" placeholder="Enter here...." required  >
                    </div>                    
                  </div>
                  <div class="col-md-12 mb-3">
                  <div data-mdb-input-init class="form-outline">
                  <label class="form-label">Address*</label>
                    <input type="text" class="form-control"   name="address" placeholder="Enter here...." required  >
                    </div>                    
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-sm w-100" type="submit" name="submit" value="signup" >Sign Up</button>
                    </div>
                    <div class="col-12">
                    <p class="m-0 text-secondary text-center">Don You have an account? <a href="./login.php" class="link-primary text-decoration-none">Login</a></p>
                  </div>
                  </div>
                </div>
              </form>

              <script src="./masking/jquery.min.js"></script>
    <script src="./masking/jquery.inputmask.bundle.js"></script>

<script>

$(":input").inputmask();

</script>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>