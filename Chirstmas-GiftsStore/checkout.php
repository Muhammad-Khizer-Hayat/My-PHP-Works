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
<?php require_once "./includes/css-links.php"   ?>

</head>

<body>


<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

    <!-- Header Section Start -->
    <!-- headers-includes -->
<?php require_once "./includes/headers.php" ?>    
<?php
    $data = getCart($con);
    ?>
    
    <!-- Header Section End -->
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>Checkout</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Checkout Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 col-12 mb-30">
                   
                    <!-- Checkout Accordion Start -->
                    <div id="checkout-accordion" class="panel-group">
                       
                        <!-- Checkout Method -->
                        <div class="panel single-accordion">
                           
                            <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method">1. checkout method</a>
                            
                            <div id="checkout-method" class="collapse show">
                                <div class="checkout-method accordion-body fix">
                                   
                                   
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Billing Method -->
                        <div class="panel single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">2. billing informatioon</a>
                            <div id="billing-method" class="collapse">
                                <div class="accordion-body billing-method fix">
                                   
                                    <form action="check-out-qry.php" method="POST"  class="billing-form checkout-form">
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <select>
                                                  <option value="1">Select a country</option>
                                                  <option value="2">pakistan</option>
                                                  <option value="2">bangladesh</option>
                                                  <option value="3">Algeria</option>
                                                  <option value="4">Afghanistan</option>
                                                  <option value="5">Ghana</option>
                                                  <option value="6">Albania</option>
                                                  <option value="7">Bahrain</option>
                                                  <option value="8">Colombia</option>
                                                  <option value="9">Dominican Republic</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">									
                                                <input type="text"  name="name" placeholder=" Name">
                                            </div>
                                        
                                            <div class="col-12 mb-20">								
                                                <input type="text" name="email" placeholder="E-Mail">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder=" Address" name="address" type="text">
                                            </div>
                                           
                                           
                                            <div class="col-md-12 col-12 mb-20">									
                                                <input placeholder="Phone Number" name="number" type="number">
                                            </div>							
                                        </div>
                                    <!-- </form> -->
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Shipping Method -->
                    
                        
                     
                        
                    </div><!-- Checkout Accordion Start -->
                    
                </div>
                
                <!-- Order Details -->
                <div class="col-lg-6 col-12 mb-30">
                   
                    <div class="order-details-wrapper">
                        <h2>your order</h2>
                        <div class="order-details">
                            <form action="#">
                                <ul>
                                    <li><p class="strong">product</p><p class="strong">total</p></li>
                                    <?php $grand_total = 0 ?>
                                    <?php if (!empty($data)) { ?>
                                    <?php while ($item = mysqli_fetch_assoc($data['items'])) { ?>
                                        <?php $grand_total += $item['total_price']  ?>
                                    <li><p><?= $item['name'] ?></p><p>$<?= $item['total_price'] ?></p></li>
                                    <?php } ?>
                                    <?php } ?>
                                    <li><p class="strong">cart subtotal</p><p class="strong">$<?= $grand_total ?></p></li>
                                    <li><p class="strong">shipping</p><p> Free Shipping </p></li>
                                    <li><p class="strong">order total</p><p class="strong">$<?= $grand_total ?></p></li>
                                    <li><button class="button" type="submit" name="submit" value="submit" >place order</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div><!-- Checkout Section End-->

       
    <!-- Footer Section Start-->
    
    <!-- footers-includes -->
  <?php require_once "./includes/footers.php" ?>
    
    <!-- Footer Section End-->
    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- Js-links includes -->
<?php require_once "./includes/Js-links.php"  ?>

</body>


</html>