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
<!-- Headers-includes -->
<?php require_once "./includes/headers.php" ?>

<?php
$cats= getCategories($con);

$products = getProducts($con);
?>

 <!-- Header Section End -->
    
       
    <!-- Hero Slider Start-->
    <div class="hero-slider section fix">

        <!-- Hero Slide Item Start-->
        <div class="hero-item" style="background-image: url(img/hero/1.jpg)">

            <!-- Hero Content Start-->
            <div class="hero-content text-center m-auto">

                <h2>Save 25%</h2>
                <h1>Christmas Sale</h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                <a href="#">LEARN MORE</a>

            </div><!-- Hero Content End-->


        </div><!-- Hero Slide Item End-->

        <!-- Hero Slide Item Start-->
        <div class="hero-item" style="background-image: url(img/hero/2.jpg)">

            <!-- Hero Content Start-->
            <div class="hero-content text-center m-auto">

                <h2>Save 25%</h2>
                <h1>Christmas Sale</h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                <a href="#">LEARN MORE</a>

            </div><!-- Hero Content End-->


        </div><!-- Hero Slide Item End-->

    </div><!-- Hero Slider End-->
    
       
    <!-- Banner Section Start-->
    <div class="banner-section section pt-120">
        <div class="container">
            <div class="row">
                <?php while($row= mysqli_fetch_assoc($cats)) { ?>
                
                <div class="col-md-4 col-12 mb-30">
            
                    <div class="single-banner">
                        <img src="<?php echo imageUrl("categories", $row['image']) ?>" alt="banner">
                       
                    </div>
                
                            <h5 class="text-danger text-center mt-2"><?= $row['category']  ?></h5>
                        
                    
                </div>
                <?php } ?>
                
                <!-- <div class="col-lg-6 col-12 mb-30">
                    
                    <div class="single-banner">
                        <img src="img/banner/2.jpg" alt="banner">
                        <div class="banner-content left">
                            <h2 class="black"><span class="small">Save <span class="red">25%</span></span><span class="red">Offer</span> Christmas</h2>
                            <a href="#" class="link">Shop Now</a>
                        </div>
                    </div>
                     -->
                </div>
                
            </div>
        </div>
    </div><!-- Banner Section End-->
    
       
    <!-- Product Section Start-->
    <div class="product-section section pt-70 pb-60">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h1>Featured Products</h1>
                </div>
            </div><!-- Section Title End-->
            
            <!-- Product Wrapper Start-->
            <div class="row">
                <?php while($prt= mysqli_fetch_assoc($products)) { ?>
                
                <!-- Product Start-->
                <div class="col-lg-4 col-md-4 col-12 mb-60 <?php $prd= getCategroyById($con, $prt['category_id']); echo $prd['category'] ?>  ">
                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="product-details.php?pid=<?=$prt['id'] ?> " class="img"><img src="<?php echo imageUrl("products", $prt['image']) ?>" alt="Product"></a>
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
                                    <h5 class="title"><a href="product-details.php ?pid=<?=$prt['id'] ?>"> <?= $prt['name'] ?> </a></h5>
                                    <a href="shop.php" class="category"><?= $prd['category'] ?></a>
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
                                <a href="?pid=<?=$prt['id'] ?>">add to cart</a>
                            </div>
                            
                        </div>

                    </div>
                    
                </div><!-- Product End-->
                <?php } ?>
                
                
               
                
              
                
                
                
            </div><!-- Product Wrapper End-->
            
        </div>
    </div><!-- Product Section End-->
    
       
    <!-- Testimonial Section Start-->
    <div class="testimonial-section section bg-gray pt-100 pb-65" style="background-image: url(img/bg/testimonial.png)">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h1>Customer Reviews</h1>
                </div>
            </div><!-- Section Title End-->
            
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12 ml-auto mr-auto">
                    
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider text-center">
                        
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="img/testimonial/1.jpg" alt="customer">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            <h5>Betty Moore</h5>
                        </div>
                        
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="img/testimonial/1.jpg" alt="customer">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            <h5>Betty Moore</h5>
                        </div>
                        
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="img/testimonial/1.jpg" alt="customer">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                            <h5>Betty Moore</h5>
                        </div>
                        
                    </div><!-- Testimonial Slider End -->
                    
                </div>
            </div>
            
        </div>
    </div><!-- Testimonial Section End-->
    
       
    <!-- Newsletter Section Start-->
    <div class="newsletter-section section pt-100 pb-120">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-55">
                    <h1>Newsletter</h1>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                </div>
            </div><!-- Section Title End-->
            
            <div class="row">
                <div class="text-center col">
                    
                    <!-- Newsletter Form -->
                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">subscribe</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div><!-- Testimonial Section End-->
    
       
    <!-- Blog Section Start-->
    <div class="blog-section section bg-gray pt-100 pb-60">
        <div class="container">
           
            <!-- Section Title Start-->
            <div class="row">
                <div class="section-title text-center col mb-60">
                    <h1>Christmas Blog</h1>
                </div>
            </div><!-- Section Title End-->
            
            <div class="row">
                
                <!-- Blog Item Start-->
                <div class="blog-item col-lg-4 col-md-6 col-12 mb-60">
                    
                    <!-- Image -->
                    <a href="blog-details.html" class="image"><img src="img/blog/1.jpg" alt="blog"></a>
                    
                    <!-- Content -->
                    <div class="content fix">
                        
                        <!-- Publish Date -->
                        <span class="publish"><span>Published on:</span> 25 May 2017</span>
                        
                        <!-- Title -->
                        <h4 class="title"><a href="blog-details.html">If you are going to use a passage.</a></h4>
                        
                        <!-- Decs -->
                        <p>If you are going to use a passage of Lorem Ipsum, yneed to be sure there isn't anything embarrassing hidden ithe middle text. All the Lorem Ipsum.</p>
                        
                        <!-- Read More Link --> 
                        <a href="blog-details.html" class="read-more">Read More</a>
                        
                    </div>
                    
                </div><!-- Blog Item End-->
                
                <!-- Blog Item Start-->
                <div class="blog-item col-lg-4 col-md-6 col-12 mb-60">
                    
                    <!-- Image -->
                    <a href="blog-details.html" class="image"><img src="img/blog/2.jpg" alt="blog"></a>
                    
                    <!-- Content -->
                    <div class="content fix">
                        
                        <!-- Publish Date -->
                        <span class="publish"><span>Published on:</span> 25 May 2017</span>
                        
                        <!-- Title -->
                        <h4 class="title"><a href="blog-details.html">Ut enim ad minima veniam, quis.</a></h4>
                        
                        <!-- Decs -->
                        <p>If you are going to use a passage of Lorem Ipsum, yneed to be sure there isn't anything embarrassing hidden ithe middle text. All the Lorem Ipsum.</p>
                        
                        <!-- Read More Link --> 
                        <a href="blog-details.html" class="read-more">Read More</a>
                        
                    </div>
                    
                </div><!-- Blog Item End-->
                
                <!-- Blog Item Start-->
                <div class="blog-item col-lg-4 col-md-6 col-12 mb-60">
                    
                    <!-- Image -->
                    <a href="blog-details.html" class="image"><img src="img/blog/3.jpg" alt="blog"></a>
                    
                    <!-- Content -->
                    <div class="content fix">
                        
                        <!-- Publish Date -->
                        <span class="publish"><span>Published on:</span> 25 May 2017</span>
                        
                        <!-- Title -->
                        <h4 class="title"><a href="blog-details.html">At vero eos et accusamus et iusto</a></h4>
                        
                        <!-- Decs -->
                        <p>If you are going to use a passage of Lorem Ipsum, yneed to be sure there isn't anything embarrassing hidden ithe middle text. All the Lorem Ipsum.</p>
                        
                        <!-- Read More Link --> 
                        <a href="blog-details.html" class="read-more">Read More</a>
                        
                    </div>
                    
                </div><!-- Blog Item End-->
                
            </div>
            
        </div>
    </div><!-- Blog Section End-->
    
       
    <!-- Footer Section Start-->

<?php require_once "./includes/footers.php"  ?>

   <!-- Footer Section End-->
    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

<?php require_once "./includes/Js-links.php"  ?>
</body>

</html>