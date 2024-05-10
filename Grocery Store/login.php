



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login_Form</title>

    <!-- css links include -->
    <?php require_once("./includes/css-links.php") ?>
</head>
<body class="container ">
    <!-- Login 13 - Bootstrap Brain Component -->
<section class=" py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <?php
        session_start();

if(!empty($_SESSION['error'])){
  $msg=$_SESSION['error'];
  echo " <div class='alert alert-danger alert-dismissible fade show credErr'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
  </button> <strong>Warning! </strong> $msg</div>";

}
unset($_SESSION['error']);

if(!empty($_SESSION['Invalid'])){
  $msg=$_SESSION['Invalid'];
  echo " <div class='alert alert-danger alert-dismissible fade show credErr'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
  </button> <strong>Warning! </strong> $msg</div>";

}
unset($_SESSION['Invalid']);


?>
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="text-center mb-3">
                <a href="#!">
                </a>
              </div>
              <h3 class=" fw-normal text-center text-success mb-4"><strong>Login Form</strong></h3>
              <form method="POST" action="./login-qry.php">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12 mt-3">
                    
                      <input type="email" class="form-control" name="email"  placeholder="E-Mail">
            
                  </div>
                  <div class="col-12 mt-4">
                    
                      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" >
                    
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                      
                      <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-success btn-sm w-100" type="submit" name="submit" value="login">Log in</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Don't have an account? <a href="./signup.php" class="link-primary text-decoration-none">Sign up</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- js links includes -->

<?php require_once("./includes/javascript-links.php") ?>

  <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".credErr").hide();
            }, 5000);

        })
    </script>
</body>
</html>