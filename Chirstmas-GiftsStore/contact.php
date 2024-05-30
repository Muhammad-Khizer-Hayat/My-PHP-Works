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
   <?php require_once "./includes/headers.php" ?>
   
    <!-- Header Section End -->
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>contact us</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Contact Section Start-->
    <div class="contact-section section bg-white pt-120">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-10 col-12 ml-auto mr-auto">
                    
                    <div class="contact-wrapper">
                        <div class="row">

                            <div class="contact-info col-lg-5 col-12">
                                <h4 class="title">Contact Info</h4>
                                <p>It is a long established fact that readewill be distracted by the readable content of a page when looking at ilayout.</p>
                                <ul>
                                    <li><span>Address:</span>House 09,Road 3,Dhaka</li>
                                    <li><span>Email:</span>christ@email.com</li>
                                    <li><span>Phone:</span>+99 854 785 65</li>
                                </ul>
                                <div class="contact-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="contact-form col-lg-7 col-12">
                                <h4 class="title">Send Your Massage</h4>
                                <form action="contact-us-qry.php" method="POST">
                                    <input type="text" name="name" placeholder="Your Name">
                                    <input type="email" name="email" placeholder="Your Email">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                    <input type="submit" value="submit" name="submit" >
                                </form>
                                
                            </div>

                        </div>
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div><!-- Contact Section End-->
    
    <!-- Contact Map -->
    <div id="contact-map"></div>
    
       
    <!-- Footer Section Start-->
   <?php require_once "./includes/footers.php"  ?>
   
    <!-- Footer Section End-->
    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

  <!-- js-links-includes -->
  <?php require_once "./includes/Js-links.php" ?>

</body>

</html>