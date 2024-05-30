<!-- <?php
 require_once "./includes/auth.php";

?> -->

<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Christ - Christmas Gift Shop HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
      <!-- css-links-includes -->
      <?php require_once "./includes/css-links.php" ?>
</head>

<body>


<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

    <!-- Header Section Start -->
   <?php  require_once "./includes/headers.php" ?>
   <?php
// $cats= getCategories($con);

$products = getProducts($con);
?>
   
    <!-- Header Section End -->
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>shop page</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Product Section Start-->
    <div class="product-section section pt-120 pb-120">
        <div class="container">
            
            <!-- Product Wrapper Start-->
            <div class="row">
            <?php while($prt= mysqli_fetch_assoc($products)) { ?>
                
                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60 <?php $prd= getCategroyById($con, $prt['category_id']); echo $prd['category'] ?>  ">
                   
                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="product-details.php ?pid=<?=$prt['id'] ?>" class="img"><img src="<?php echo imageUrl("products", $prt['image']) ?>" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <span class="label">New</span>
                        </div>
                        
                        <!-- Content -->
                        <div class="content">
                            
                            <!-- Head Content -->
                            <div class="head fix">
                               
                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="product-details.html?pid=<?=$prt['id'] ?>"><?= $prt['name'] ?></a></h5>
                                    <a href="shop.html" class="category"><?= $prd['category'] ?></a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$<?= $prt['unit_price'] ?></span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>
                                
                            </div>
                            
                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="product-details.php ?pid=<?=$prt['id'] ?>">add to cart</a>
                            </div>
                            
                        </div>

                    </div>
                    
                </div><!-- Product End-->
                <?php } ?>
                
                
                <!-- Pagination Start -->
                <div class="pagination col-12 mt-20">
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="arrows"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div><!-- Pagination End -->
                
            </div><!-- Product Wrapper End-->



            
        </div>
    </div><!-- Product Section End-->

       
    <!-- Footer Section Start-->
    <?php require_once "./includes/footers.php" ?>
    
    <!-- Footer Section End-->
    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

  <!-- js-links-includes -->
  <?php require_once "./includes/Js-links.php" ?>
</body>

</html>