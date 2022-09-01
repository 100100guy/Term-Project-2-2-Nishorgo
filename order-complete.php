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
               <a href="product.php">products</a>
               <a href="blog.php">blogs</a>
               <a href="registration-form.html">register</a>
          </nav>
     
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
               <p>The most important things are not things so we will design experiences.</p>
               <a href="product.php" class="btn">shop now</a>
          </div>
     
     </section>
     
     <!-- home section ends -->
 
  <!-- ---- Order Complete --->
  <div class="container mx-auto px-4 pt-16 pb-24 text-center">
       <div class="mb-8">
     <img src="/image/complete.png" class="w-44 inline-block mx-auto mb-12 mt-28" />            
       </div>
       <h2 class="text-gray-800 font-medium text-4xl mb-28">YOUR ORDER IS COMPLETED!</h2>
       <p class="text-gray-600 mb-28">Thank you for your order! Your order is being processed and will be complete with 3-6 hours. You will receive and email confirmation when you order is completed </p>

       <div class="mt-10">
            <a href="index.php" class="bg-primary text-white px-6 py-3 font-medium rounded-md uppercase hover:bg-transparent hover:text-primary transition text-center text-4xl" >Continue Shopping 
            </a>

       </div>

  </div>


   <!-- ---- End Order Complete --->
   


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