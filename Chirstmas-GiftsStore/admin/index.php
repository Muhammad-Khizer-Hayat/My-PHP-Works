<?php
require_once "./includes/auth.php";
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
        <!-- Statics-Tabs-Include -->
        <?php  require_once "./includes/statics-tabs.php"   ?>
         <!-- Settings-Js-Include -->
         <?php  require_once "./includes/settings-js.php"   ?>
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