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
               <!-- <a href="#categories">categories</a> -->
               <a href="blog.php">blogs</a>
               <a href="registration-form.php">register</a>
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
               <a href="checkout.html" class="btn">checkout</a>
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
               <a href="product.html" class="btn">shop now</a>
          </div>
     
     </section>
     
     <!-- home section ends -->

   
 <!-- ---- Account Wrapper--->

 <div class="container lg:grid grid-cols-12 items-start gap-6 pt-4 pb-16 ">
       <!-- ---- Sidebar --->
       <div class="col-span-3">
            <!-- ---- User Profile --->
            <div class="px-4 py-3 shadow flex bg-gray-100 items-center gap-4 ">
                 <div class="flex-shrink-0"> 
                      <img src="/images/ariyan.jpg" class="rounded-full w-14 h14 p-1 border border-gray-200 object-cover " /> 
                 </div>
                 <div>
                      <p class="text-gray-600">Hello..</p>
                      <h4 class="text-gray-800 capitalize font-semibold">Kazi Ariyan</h4>
                 </div>

            </div>
            <!-- ----End User Profile --->

 <!-- ---- Profile Link --->
 <div class="mt-6 bg-gray-100 shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600 ">
       <!-- ---- single Link --->
       <div class="space-y-1 pl-8">
            <a href="#" class="relative text-base font-medium capitalize hover:text-primary transition block text-primary">
               Manage Account 
               <span class="absolute -left-8 top-0 text-base ">
                    <i class="far fa-address-card"></i>
               </span>
            </a>
            <a href="UserProfile.php" class="hover:text-primary transition capitalize block">Profile Information </a>
                    <a href="address.php" class="hover:text-primary transition capitalize block">Manage Address </a>
                    <a href="changepassword.php" class="hover:text-primary transition capitalize block">Change password </a>
       </div> 
        <!-- ---- End single Link --->


         <!-- ---- single Link --->
       <div class="space-y-1 pl-8 pt-4">
          <a href="OrderHistory.php" class="relative text-base font-medium capitalize hover:text-primary transition block text-primary">
             My order History
             <span class="absolute -left-8 top-0 text-base ">
                  <i class="fas fa-gift"></i>
             </span>
          </a>
     </div> 
      <!-- ---- End single Link --->


        <!-- ---- single Link --->
        <div class="space-y-1 pl-8 pt-4">
          <a href="#" class="relative text-base font-medium capitalize hover:text-primary transition block text-primary">
            Payment Method 
             <span class="absolute -left-8 top-0 text-base ">
                  <i class="far fa-credit-card"></i>
             </span>
          </a>
          <a href="#" class="hover:text-primary transition capitalize block" >Cash</a>
          
     </div> 
      <!-- ---- End single Link --->






 </div> 

  <!-- ----End Profile Link ---> 
       </div>
        <!-- ----End Sidebar--->

 <!-- ----Account Content --->
<div class="col-span-9 shadow rounded px-6 bg-gray-100 pt-5 pb-7 mt-6 lg:mt-0 ">
     <form method="post" action="UserUpdateAddress.php" >
          <h3 class="text-2xl font-medium capitalize mb-6 mt-6">Manage Address</h3>
          
<div class="space-y-4">
     



     <div>
          <label class="text-xl text-gray-800 mb-2 mt-2 block" >Address </label>
           <input type="text" name="address" class="input-box" value="" />
     </div>

</div>  

<div class="mt-6">
     <button type="submit" class="px-6 py-2 text-center text-white bg-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium mb-6 mt-6" >Save Change </button>
</div>


</form>
     
     
     
 

</div>

  <!-- ----End Account Content---> 


 </div> 

  <!-- ---- End Account Wrapper ---> 
   
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