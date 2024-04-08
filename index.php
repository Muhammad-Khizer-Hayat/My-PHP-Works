<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard-Home</title>

                  <!--*** bootsrap&css Links*****-->
                  <?php require_once("./includes/bootstrao-css.php");  ?>



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

              <!--*** Navebarheader Links*****-->
              <?php require_once("./includes/naveheader.php");  ?>


       <!--*** Navebar Links*****-->
       <?php require_once("./includes/navebar.php");  ?>

              <!--*** Sidebar Links*****-->
              <?php require_once("./includes/sidebar.php");  ?>

        

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                              <!--*** Tabs Links*****-->
              <?php require_once("./includes/tabs.php");  ?>

            </div>
            <!-- #/ container -->
        </div>
 <!--*** footer Links*****-->
 <?php require_once("./includes/footer.php");  ?>

    
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--*** JavaScript Links*****-->
 <?php require_once("./includes/javaScript.php");  ?>



</body>

</html>