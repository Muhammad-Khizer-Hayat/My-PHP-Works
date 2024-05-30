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
   
<!-- Css-links-includes -->
<?php require_once "./includes/css-links.php" ?>

</head>

<body>

<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

    <!-- Header Section Start -->
   
   <!-- header-includes -->
<?php require_once "./includes/headers.php"  ?>

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
                    <h1>Cart</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Cart Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <div class="table-responsive mb-30">
                        <table class="table cart-table text-center">
                            
                            <!-- Table Head -->
                            <thead>
                                <tr>
                                    <th class="number">#</th>
                                    <th class="image">image</th>
                                    <th class="name">product name</th>
                                    <th class="qty">quantity</th>
                                    <th class="price">price</th>
                                    <th class="total">totle</th>
                                    <th class="remove">remove</th>
                                </tr>
                            </thead>
                            
                            <!-- Table Body -->
                            <tbody>
                            <?php $grand_total = 0 ?>
                            <?php if (!empty($data)) { $sr=1; ?>
                                    <?php while ($item = mysqli_fetch_assoc($data['items'])) { ?>
                                        <?php $grand_total += $item['total_price']  ?>
                                <tr>
                                    <td><span class="cart-number"><?=$sr ?></span></td>
                                    <td><a href="#" class="cart-pro-image"><img src="<?php echo imageUrl("products", $item['image']) ?>" alt="" /></a></td>
                                    <td><a href="#" class="cart-pro-title"><?= $item['name'] ?></a></td>
                                    <td><div class="product-quantity">
                                        <input type="text" value="<?= $item['quantity'] ?>" name="qtybox">
                                    </div></td>
                                    <td><p class="cart-pro-price">$<?= $item['unit_price'] ?></p></td>
                                    <td><p class="cart-price-total">$<?= $item['total_price'] ?></p></td>
                                    <td><button class="cart-pro-remove" data-id="<?= $item['id'] ?>" ><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                            <?php $sr++; } ?>
                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                       
                        <!-- Cart Action -->
                        <div class="cart-action col-lg-4 col-md-6 col-12 mb-30">
                            <a href="#" class="button">Continiue Shopping</a>
                            <button class="button">update cart</button>
                        </div>
                        
                        <!-- Cart Cuppon -->
                        <div class="cart-cuppon col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Discount Code</h4>
                            <p>Enter your coupon code if you have</p>
                            <form action="#" class="cuppon-form">
                                <input type="text" placeholder="Cuppon Code">
                                <button class="button">apply coupon</button>
                            </form>
                        </div>
                        
                        <!-- Cart Checkout Progress -->
                        <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Process Checkout</h4>
                            <p><span>Subtotal</span><span>$<?= $grand_total ?></span></p>
                            <p><span>Discount</span><span>20%</span></p>
                            <h5><span>Grand total</span><span>
                            $<?php
                                                $disc = $grand_total / 20;
                                                $grand_total = $grand_total - $disc;
                                                echo $grand_total;
                                                ?>
                            </span></h5>
                            <a href="./checkout.php"> <button  class="button">process to checkout</button></a>
                           
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- Cart Section End-->

       
    <!-- Footer Section Start-->
    
    <!-- Footers-includes -->

    <?php require_once "./includes/footers.php" ?>
    
    
    <!-- Footer Section End-->
    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- Js-links-includes -->
<?php require_once "./includes/Js-links.php"  ?>

<script>
        $(document).ready(function() {
            $(".cart-pro-remove").on("click", function(e) {
                e.preventDefault();
                let item_id = $(this).data('id');
                //  alert (item_id);
                //  exit;

                Swal.fire({
                    title: "Do you want to Delete item from cart?",
                    showDenyButton: true,
                    confirmButtonText: "Yes, Delete",
                    denyButtonText: `Don't Delete`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        $.ajax({
                            url: "add-to-cart.php",
                            type: "POST",
                            data: {
                                item_id: item_id
                                
                            },
                            success: function(response) {
                                if (response == true) {
                                    Swal.fire({
                                        position: "top-center",
                                        icon: "success",
                                        title: "Items is successfully deleted from cart",
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then( () => {
                                        window.location.reload();
                                    })
                                }

                            }
                        })


                    } else if (result.isDenied) {
                        Swal.fire("Okay, not deleted", "", "info");
                    }
                });

            })
        })
    </script>


</body>


</html>