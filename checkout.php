<?php include('NishorgoServer.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Nishorgo | Customer Page </title>
     <link rel="stylesheet" href="./css/customer-account.css" />
     
     <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
     
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

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
               <a href="cart.php" class="btn">checkout</a>
          </div>
     
          <form action="" class="login-form">
               <h3>login now</h3>
               <input type="email" placeholder="your email" class="box">
               <input type="password" placeholder="your password" class="box">
               <p>don't have an account <a href="registration-form.php">create now</a></p>
               <input type="submit" value="login now" class="btn">
          </form>
     
     </header>
     
     <!-- header section ends -->
     
     <!-- home section starts  -->
     
     <section class="home" id="home">
     
          <div class="content">
               <h3>The best <span>plant</span> under one roof</h3>
               <p>The most important things are not things so we will design experiences.</p>
               <a href="product.php" class="btn">shop now</a>
          </div>
     
     </section>
     
     <!-- home section ends -->
 
 <!-- ---- Checkout Wrapper--->

 <div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4 ">
       <!-- ---- Checkout Form--->
       <div class="col-span-9">
               <div class="lg:col-span-8 border border-gray-300 px-4 py-4 rounded bg-gray-100">
                    <form method="" action="">
                         <h3 class="text-2xl font-medium capitalize mb-6 mt-6"> Checkout </h3>
               
                         <div class="space-y-4">
                              <div class="grid sm:grid-cols-4 gap-4 ">
                                   <div class="order_total" style="border: black; border-width:1px; border-style:solid;">
                                        <h4>Payment Method :</h4>
                                        <h4>Cash On Delivery</h4>
                                   </div>
                                   <br>
                                   <div class="order_total" style="border: black; border-width:1px; border-style:solid;">
                                        <h4>Delivery Date (estimated) :</h4>
                                        <h4><?php $shipDate = date('d-m-Y', strtotime('+1 week')); echo $shipDate; ?></h4>
                                   </div>
                                   <br>
                                   <?php

                                   $dbCon = mysqli_connect('localhost','root', '', 'nishorgo');
                                   if(mysqli_connect_errno()){
                                        echo 'could not connect to server.';
                                   }

                                   $name = $_SESSION["username"];
                                   $sql = "SELECT * From user WHERE username = '$name';" ;
                                   $result = mysqli_query($dbCon,$sql) or die("Error in $sql");
                                   $row = mysqli_fetch_assoc($result);

                                   ?>
                                   <div class="order_total" style="border: black; border-width:1px; border-style:solid;">
                                   <h4>Delivery Location :</h4>
                                   <h4>
                                   <?php

                                        $deliverAddress = $row['address'];
                                        if(!empty($_POST['deliverAddress'])){
                                        $deliverAddress = $_POST['deliverAddress'];
                                        }
                                        echo $deliverAddress;
                                        ?>
                                   </h4>
                                    <div class="shipping_card">
                                        <form class="form_submit" method="post" action="checkout.php">
                                             <label  >Change Delivery Location</label>
                                             <input placeholder="Enter address" name="deliverAddress">
                                             <div class="input-group">
                                                  <button type="submit" >Change</button>
                                             </div>
                                        </form>
                                   </div>
                            
                        </h4>
                    </div>
               
                                   
               
                        </div>            
               
                         </div>
                    </form>
               </div>
       </div>
 
        <!-- ---- End Checkout Form--->
        

        <?php
         $user = $_SESSION["username"];
        
         $sql = "SELECT SUM(product.price*cart.CartQuantity) AS Total From product,cart WHERE product.product_id = cart.CartProductID AND cart.UserName = '$user'" ;
         $result = mysqli_query($dbCon,$sql);
         $row = mysqli_fetch_assoc($result);
         $total = $row['Total'];
         $amountToPay = $total*1.1 ;
         $resultCheck = mysqli_num_rows($result);
      ?>

 <!-- ---- Order Summary --->
 <div class="col-span-3">
     <div class="lg:col-span-4 border border-gray-300 px-4 py-4 rounded mt-6 lg:mt-0 bg-gray-100 ">
          <h4 class="text-gray-800 text-2xl mb-6 mt-6 font-medium uppercase ">Order Summary</h4>
     
          
     
     
          <div class="flex justify-between border-b border-gray-300 mt-1 mb-4">
               <h4 class="text-gray-800 font-medium my-3 uppercase">Subtotal</h4>
               <h4 class="text-gray-800 font-medium my-3 uppercase">$ <?php echo $amountToPay ; ?> </h4>
          </div>
     
          <div class="flex justify-between border-b border-gray-300 mt-1 mb-4">
               <h4 class="text-gray-800 font-medium my-3 uppercase">Shipping</h4>
               <h4 class="text-gray-800 font-medium my-3 uppercase">Free</h4>
          </div>
     
     
          <div class="flex justify-between border-b border-gray-300 mt-1 mb-4">
               <h4 class="text-gray-800 font-medium my-3 uppercase">Total</h4>
               <h4 class="text-gray-800 font-medium my-3 uppercase">$<?php echo $amountToPay ; ?> </h4>
          </div>
     
          <div class="flex items-center mb-4 mt-2">
               <input type="checkbox" id="agreement" class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3 " />
               <label for="agreement" class="text-gray-600 ml-3 cursor-pointer text-sm "> Agree to our <a href="#"
                         class="text-primary">terms & conditions</a> </label>
     
          </div>
          <form method="post" action="FinalPage.php">
  
               <button type="submit" name="placeOrder" class="bg-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent hover:text-primary transition text-xl w-full block text-center "><h2>Place Order</h2></button>
          
          </form>
     
          
     
     </div>
 </div>



  <!-- ---- End Order Summary--->







 </div>

 

  <!-- ---- End Checkout Wrapper ---> 
   


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

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/tailwind.config.js"></script>

<script>
     let menuBar = document.querySelector('#menuBar')
     let mobileMenu = document.querySelector('#mobileMenu')
     let closeMenu = document.querySelector('#closeMenu')

     menuBar.addEventListener('click', function(){
          mobileMenu.classList.remove('hidden')
     })

     closeMenu.addEventListener('click', function(){
          mobileMenu.classList.add('hidden')
     })

</script>
     
</body>
</html>