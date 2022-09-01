<?php include('NishorgoServer.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    
     <title>Nishorgo | PlaceOrder</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="./css/customer-account.css" />
    <link rel="stylesheet" href="./css/AdminPlaceOrder.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet">

    
   </head>
<body>

<header class="header">

<a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>

<nav class="navbar">

<a href="AdminProfile.php" class="nav-item nav-link active">Admin profile</a>
<a href="AdminAddProduct.php" class="nav-item nav-link active">Add Product</a>
<a href="ProductList.php" class="nav-item nav-link active">Products List</a>

<div class="navbar-nav ms-auto">
<a href="index.php?logout='1'" class="nav-item nav-link active">Logout </a>
</div>



</nav>


</header><?php


$dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
if(mysqli_connect_errno()){
     echo 'could not connect to server.';
}

$sql = "SELECT COUNT(user_id) AS cnt From user;" ;
$result = mysqli_query($dbCart,$sql) or die("Error in $sql");
$count=mysqli_fetch_assoc($result);
$res=0;
if(!isset($count['cnt'])){
    $res=0;
}
else{
    $res=$count['cnt'];
}

$sql = "SELECT MAX(oid_main) AS maximum From orders;" ;
$result = mysqli_query($dbCart,$sql) or die("Error in $sql");
$count=mysqli_fetch_assoc($result);
$res2=0;
if(!isset($count['maximum'])){
    $res2=0;
}
else{
    $res2=$count['maximum'];
}

$sql = "SELECT COUNT(product_id) AS cnt From product;" ;
$result = mysqli_query($dbCart,$sql) or die("Error in $sql");
$count=mysqli_fetch_assoc($result);
$res3=0;
if(!isset($count['cnt'])){
    $res3=0;
}
else{
    $res3=$count['cnt'];
}





?>



  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Number of Customers</div>
            <div class="number"><?php echo $res; ?></div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Number of Orders</div>
            <div class="number"><?php echo $res2; ?></div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Types of Products</div>
            <div class="number"><?php echo $res3; ?></div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
      <?php



        $sql = "SELECT MAX(oid_main) AS maximum From orders;" ;
        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
        $count=mysqli_fetch_assoc($result);
        $res1=0;
        if(!isset($count['maximum'])){
            $res1=0;
        }
        else{
            $res1=$count['maximum'];
        }


        ?>
      
    
      
      
     
      <div class="sales-boxes">
      <?php
      $x=1;
      while($x<=$res1):
        ?>
    
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <?php
       $sql = "SELECT *  From orders where oid_main='$x';" ;
       $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

       while($row = mysqli_fetch_assoc($result)):
       ?>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Order ID</li>
              <li><a href="#"><?php echo $row['oid_main']; ?></a></li>             
            </ul>
            <ul class="details">
            <li class="topic">Username</li>
            <li><a href="#"><?php echo $row['UserName']; ?></a></li>          
          </ul>
          <ul class="details">
            <li class="topic">Product</li>
            <li><a href="#"><?php echo $row['ProductID']; ?></a></li>            
          </ul>
          <ul class="details">
            <li class="topic">Quantity</li>
            <li><a href="#"><?php echo $row['OrderQuantity']; ?></a></li>           
          </ul>
          </div>
       
      <?php
        endwhile;
        
                 
    ?>
     </div>
     <br>
     <br>
     
     <?php
     $x=$x+1;
        endwhile;
                 
    ?>
      
    </div>
    </div>
    
    
  </section>

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
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#reviews" class="links"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
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


  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

