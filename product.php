<?php include('NishorgoServer.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nishorgo | Product Page</title>

    <!-- Site Icon -->
    <link rel="shortcut Icon" type="image/png" href="img/favicon.png">

    <!-- Font Awesome Icons -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/product-style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body id="page-top">

    <!-- header section starts  -->
    
    <header class="header">
    
        <a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="#features">categories</a>
            <a href="product.php?show=all">products</a>
            <!-- <a href="#categories">categories</a> -->
            <a href="#review">review</a>
            <a href="blog.php">blogs</a>
            
            
        </nav>
        
        <div class="besidenav">
        <?php if (isset($_SESSION["username"])) : ?>
                            <a href="UserProfile.php" style="color: black">
                                    <?php echo $_SESSION["username"]; ?></a>
                           
                            <a href="index.php?logout='1'" style=" color: black">Log Out</a>
                        <?php else : ?>
                            <a href="login.php">Login</a>
                        <?php endif ?>
        </div>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
             <!--<div class="fas fa-user" id="login-btn"></div> -->
             
            


        </div>
    
    </header>
    
    <!-- header section ends -->
    
    <!-- home section starts  -->
    
    <section class="home" id="home">
    
        <div class="content">
            <h3><span>Products</span></h3>
            <p>Nishorgo -> Products.</p>
            <a href="product.php" class="btn">shop now</a>
        </div>
    
    </section>
    
    <!-- home section ends -->

    <section class="page-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 blog-form">
                    <h2 class="blog-sidebar-title"><b>Cart</b></h2>
                    <hr />
                    <p class="blog-sidebar-text">No products in the cart...</p>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>

                    <h2 class="blog-sidebar-title"><b>Categories</b></h2>
                    <hr />

                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=all"> All Products </a></b></p>
                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=flower"> FLower Plants </a></b></p>
                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=vegetable"> Vegetable Seeds </a></b></p>
                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=fruit"> Fruit Seeds </a></b></p>
                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=tool"> Tools </a></b></p>
                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=ascprice"> Low to High </a></b></p>
                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span> <a href="product.php?show=descprice"> High to Low </a></b></p>


                    <div>&nbsp;</div>
                    <div>&nbsp;</div>

                    <h2 class="blog-sidebar-title"><b>Filter</b></h2>
                    <hr />

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Receipient's username"
                            aria-describely="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                        </div>

                    </div>

                    <p class="tags">Price $4 - $25</p>
                    <button type="button" class="btn btn-dark btn-lg">Filter</button>

                    <div>&nbsp;</div>
                    <div>&nbsp;</div>

                </div>
                <!--END  <div class="col-lg-3 blog-form">-->

                <div class="col-lg-9" style="padding-left: 30px;">
                    <div class="row">
                        <div class="col">
                            Showing all 9 results
                        </div>

                        <div class="col">
                            <select class="form-control">
                                <option value="">Default Sorting</option>
                                <option value="popularity">Sorting by popularity</option>
                                <option value="average">Sorting by average</option>
                                <option value="latest">Sorting by latest</option>
                                <option value="low">Sorting by low</option>
                                <option value="high">Sorting by high</option>
                            </select>
                        </div>

                    </div>
                    <!-- Sorting by <div class="row"> -->
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>

                    <?php
                     $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
                     if(mysqli_connect_errno()){
                      echo 'could not connect to server.';
                    } else { 
                        $productShow = $_GET['show'];
                        if($productShow == "all"){
                            $sql = "SELECT * FROM product;";
                        } else if($productShow == "vegetable"){
                            $sql = "SELECT * FROM product WHERE category = 'vegetable';";
                        } else if($productShow == "fruit"){
                            $sql = "SELECT * FROM product WHERE category = 'fruit';";
                        } else if($productShow == "tool"){
                            $sql = "SELECT * FROM product WHERE category = 'tool';";
                        } else if($productShow == "flower"){
                            $sql = "SELECT * FROM product WHERE category = 'flower';";
                        } 
                        else if($productShow == "ascprice"){
                            $sql = "SELECT * FROM product ORDER BY price ASC;";
                        } 
                        else if($productShow == "descprice"){
                            $sql = "SELECT * FROM product ORDER BY price DESC;";
                        } 
                        
                       // $sql = "SELECT * FROM product;";
                        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

                        $resultCheck = mysqli_num_rows($result);
                        
                    }
                    ?>
                   


                    <div class="row">

                    <?php

                    $count = 1;

                    if($resultCheck>0):
                        
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
    
                        <div class="col-sm-3 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <?php echo "<img src = '{$row['image']}' class='product-image'>";?>
                                    <!-- <img src="image/Rose.png" class="product-image"> -->
                                    <h5 class="card-title"><b><?php echo $row['product_name'];?></b></h5>
                                    <p class="card-text small">With supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <p class="tags">Price: $<?php echo $row['price']; ?></p>
                                    <a href="productdetails.php?product_id=<?php echo $row['product_id']?>" target="_blank"
                                        class="btn btn-success button-text"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        ?>
                    </div>
                    <!-- Sorting by <div class="row"> -->

                    <div>&nbsp;</div>
                    <div>&nbsp;</div>

                    
                    
                    

                </div>
                <!--END  <div class="col-lg-9">-->

            </div>
        </div>
    </section>


    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>


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

    <!-- custom js file link  -->
    <script src="js/product-script.js"></script>


</body>

</html>