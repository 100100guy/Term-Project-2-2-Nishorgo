<?php include('NishorgoServer.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishorgo | Shopping Cart</title>

    <!--- custom css link-->
    <link rel="stylesheet" href="./css/cart-style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--- google font link-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
</head>

<body>

    <!-- header section starts  -->
    
    <header class="header">
    
        <a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="product.php">categories</a>
            <a href="product.php?show=all">products</a>
            <a href="blog.php">blogs</a>
            <a href="registration-form.php">register</a>
        </nav>
        <div class="besidenav">
        <?php if (isset($_SESSION["username"])) : ?>
                            <a href="UserProfile.php" style="color: black">
                                    <?php echo $_SESSION["username"]; ?></a>
                           
                            <a href="index.php?logout='1' style=" color">Log Out</a>
                        <?php else : ?>
                            <a href="login.php">Login</a>
                        <?php endif ?>
        </div>
    
    
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
    
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    
        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="cart.html" class="btn">checkout</a>
        </div>
    
        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>don't have an account <a href="registration-form.html">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>
    
    </header>
    
    <!-- header section ends -->
    
    <!-- home section starts  -->
    
    <section class="home" id="home">
    
        <div class="content">
            <h3>The best <span>plant</span> under one roof</h3>
            <p>Nishorgo -> Checkout</p>
            <a href="product.html" class="btn">shop now</a>
        </div>
    
    </section>
    
    <!-- home section ends -->


    <!--- main container -->
    <?php

    if(!empty($_GET['user'])){

        $user =  $_GET['user'];

        $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

        $sql = "SELECT * From product,cart WHERE product.product_id = cart.CartProductID AND cart.UserName = '$user';" ;
        $result = mysqli_query($dbCart,$sql);
        $resultCheck = mysqli_num_rows($result);
    }

    else{

        $resultCheck = 0;
    }

    ?>

    <main class="container">

        <h1 class="heading">
            <ion-icon name="cart-outline"></ion-icon> Shopping Cart</h1>

        <div class="item-flex">

            


            <!--- cart section-->
            <section class="cart">

                <div class="cart-item-box">

                    <h2 class="section-heading">Order Summery</h2>
                    <?php

                    $subtotal = 0 ;
                    $taxrate = 0.10 ;

                    if($resultCheck>0):
                    while ($row = mysqli_fetch_assoc($result)): 
                    ?>

                    <div class="product-card">

                        <div class="card">

                            <div class="img-box">
                              <?php echo "<img src = '{$row['image']}' width='80px'
                                    class='product-img'>"; ?>
                                
                            </div>

                            <div class="detail">

                                <h4 class="product-name"><?php  
                                    echo $row['product_name'];
                                ?> </h4>

                                <div class="wrapper">

                                    <div class="product-qty">
                                        

                                        <span id="quantity"><?php  
                                        echo $row['CartQuantity'];
                                        ?></span>

                                        
                                    </div>

                                    <div class="price">
                                        $ <span id="price"><?php  
                                             echo $row['price'];
                                        ?></span>
                                    </div>
                                    <?php
                                       // $unitTotal = $row['price'] * $row['CartQuantity'];
                                        
                        
                                       // $subtotal = $subtotal + $unitTotal;
                                    ?>

                                </div>

                            </div>

                            
                                <button name="removeProduct" class="removebutton"><a href="CartRemoveProduct.php?deleteID=<?php echo $row['product_id']; ?>">Remove</button>
                            

                        </div>

                    </div>
                    <?php
                        endwhile;

                        else:
                            echo "Cart is Empty";

                        endif;
                    ?>

                   
                </div>

                <div class="wrapper">

                    

                    <div class="amount">
                    <?php 
                         $sql = "SELECT carttotal(`UserName`) AS Total1 FROM `cart`;" ;
                         $result = mysqli_query($dbCart,$sql);
                         //$resultCheck = mysqli_num_rows($result);
                         
                          $total =  mysqli_fetch_assoc($result) ;
                           
                          if(isset($total['Total1'])){
                            $subtotal=$total['Total1'] ;
                            
                          }
                          else{
                            $subtotal=0;
                          }
                    ?>

                        <div class="subtotal">
                            <span>Subtotal</span> <span>$ <span id="subtotal"><?php echo $subtotal?></span></span>
                        </div>

                        <div class="tax">
                            <span>Tax</span> <span>$ <span id="tax"><?php echo $subtotal*$taxrate?></span></span>
                        </div>

                        <div class="shipping">
                            <span>Shipping</span> <span>$ <span id="shipping">0.00</span></span>
                        </div>

                        <div class="total">
                            <span>Total</span> <span>$ <span id="total"><?php echo $subtotal+ $subtotal*$taxrate?></span></span>
                        </div>

                    </div>

                </div>

            </section>
            <!--- checkout section-->
            <section class="checkout">

                <h2 class="section-heading">Payment Details</h2>

                <div class="payment-form">

                    <div class="payment-method">

                        <button class="method selected">
                            <ion-icon name="card"></ion-icon>

                            <span>Cash On Delivery</span>

                            <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
                        </button>

                        <button class="method">
                            <ion-icon name="logo-paypal"></ion-icon>

                            <span>PayPal</span>

                            <ion-icon class="checkmark" name="checkmark-circle-outline"></ion-icon>
                        </button>

                    </div>

                    <form action="#">

                        <div class="cardholder-name">
                            <label for="cardholder-name" class="label-default">Default Address</label>
                            <input type="text" name="cardholder-name" id="cardholder-name" class="input-default">
                        </div>

                        <div class="cardholder-name">
                            <label for="cardholder-name" class="label-default">New Address</label>
                            <input type="text" name="cardholder-name" id="cardholder-name" class="input-default">
                        </div>

                        <!-- <div class="input-flex">

                            <div class="expire-date">
                                <label for="expire-date" class="label-default">Expiration date</label>

                                <div class="input-flex">

                                    <input type="number" name="day" id="expire-date" placeholder="31" min="1" max="31"
                                        class="input-default">
                                    /
                                    <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12"
                                        class="input-default">

                                </div>
                            </div>

                             <div class="cvv">
                                <label for="cvv" class="label-default">CVV</label>
                                <input type="number" name="cvv" id="cvv" class="input-default">
                            </div>

                        </div> -->

                    </form>

                </div>
                <?php 

                 if(isset($_SESSION["username"]) && $resultCheck>0): 
                ?>

                <button class="btn btn-primary">
                    <a href="checkout.php"><b>Checkout</b> $ <span id="payAmount"><?php echo $subtotal+ $subtotal*$taxrate?></span></a>
                    
                </button>
                <?php endif;?>
                <?php if(isset($_SESSION["username"]) && $resultCheck==0): 
                ?>

                <button class="btn btn-primary">
                    <a href="product.php?show=all"><b>Checkout</b>  <span id="payAmount"></span></a>
                    
                </button>
                <?php endif;?>
                <?php if(!isset($_SESSION['username'])): ?>

                <button class="btn btn-primary">
                <a href="login.php"><b>Checkout</b></a>
                </button>

                <?php endif;?>

            </section>

        </div>

    </main>

    <!-- footer section starts  -->
    
    <section class="footer">
    
        <div class="box-container">
    
            <div class="box">
                <h3> nishorgo <i class="fas fa-solid fa-leaf"></i> </h3>
                <p>The most important things are not things so we will design experiences.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+8801781737438" class="links"> <i class="fas fa-phone"></i> +880-1781737438 </a>
                <a href="tel:+8801781737438" class="links"> <i class="fas fa-phone"></i> +880-1781737438 </a>
                <a href="https://mail.google.com/mail/" class="links"> <i class="fas fa-envelope"></i> jaidmonwar.edu@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh - 1209 </a>
            </div>
    
            <div class="box">
                <h3>quick links</h3>
                <a href="index.html" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="product.html" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="product.html" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="blog.html" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>
    
            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn">
                <img src="image/payment.png" class="payment-img" alt="">
            </div>
    
        </div>
    
        <div class="credit"> created by <span> Jaid Monwar Chowdhury </span> | all rights reserved </div>
    
    </section>
    
    <!-- footer section ends -->





    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    <!--- custom js link-->
    <script src="./js/cart-script.js"></script>

    <!--- ionicon link-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>