<?php include('NishorgoServer.php');  ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nishorgo | Product Details Page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/product-details-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>
<?php
function star_rating($rating)
{
    $rating_round = round($rating * 2) / 2;
    if ($rating_round <= 0.5 && $rating_round > 0) {
        return '<i class="fa fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 1 && $rating_round > 0.5) {
        return '<i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 1.5 && $rating_round > 1) {
        return '<i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 2 && $rating_round > 1.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 2.5 && $rating_round > 2) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 3 && $rating_round > 2.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 3.5 && $rating_round > 3) {
        
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 4 && $rating_round > 3.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i>';
    }
    if ($rating_round <= 4.5 && $rating_round > 4) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i>';
    }
    if ($rating_round <= 5 && $rating_round > 4.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
    }
    
}
?>
<body>

    <!-- header section starts  -->
    
    <header class="header">
    
        <a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="product.php?show=all">categories</a>
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
            <h3><span>Product Details</span></h3>
            <p>Nishorgo -> Product Details</p>
            <a href="product.php" class="btn">shop now</a>
        </div>
    
    </section>
    
    <!-- home section ends -->

    <!-- Card Section Starts -->
    <?php 

        if(isset($_GET['product_id'])){
            
            $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
            if(mysqli_connect_errno()){
                echo 'could not connect to server.';
            }

            $id = $_GET['product_id'];

            $sql = "SELECT * From product WHERE product_id = '$id';" ;
            $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

            $row = mysqli_fetch_assoc($result);


        }

    ?>
    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                    <?php echo "<img src = '{$row['image']}' >"; ?>
                   
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title"><?php echo $row['product_name']; ?></h2>
                <a href="product.php?show=all" class="product-link">View All Products</a>
                <div class="product-rating">
                   
                    
                
                <?php
                        $rating = $row['rating'];
                        $rf=floor($rating);
                       
                       echo star_rating( $rating);
                        
                ?>
                           
                        
                        <span><?php echo $rating; ?>(<?php echo $row['ratedcount']; ?>)</span>
                </div>
                

                <div class="product-price">
                    <p class="new-price"> <span><?php echo $row['price']; ?></span></p>
                </div>
                

                <div class="product-detail">
                    <h2>about this item: </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
                        placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius.
                        Dignissimos, labore suscipit. Unde.</p>
                </div>

                <div class="purchase-info">
                <form action="CartAddProduct.php?user=<?php
                if(isset($_SESSION["username"]))
                echo $_SESSION["username"];
                ?>&addCartID=<?php echo $row['product_id']; ?>" method="post">
                    <input type="number" min="0"  value="1" name="count">
                    <button type="submit" class="btn">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </form>
                    
                    <?php 

if(isset($_SESSION["username"])):

?>

        <form method="post" action="UserRateProduct.php">
            <h3>Rate This Product 
            <input max="5" min="0" type="Number" name="rating">
            </h3>
            <input type="hidden" name="productID" value="<?php echo $row['product_id'];?>" />
            <button class="btn" type="submit">Rate</button>
        </form>

<?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Section Ends -->

    <section class="products" id="products">
    
        <h1 class="heading"> our <span>products</span> </h1>
    
        <div class="swiper product-slider">
    
            <div class="swiper-wrapper">
    
                <div class="swiper-slide box">
                    <img src="image/Rose.png" alt="">
                    <h3>Rose Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Daffodil.png" alt="">
                    <h3>Daffodil Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Marigold.png" alt="">
                    <h3>Marigold Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Hydrangea.png" alt="">
                    <h3>Hydrangea Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Orchids.png" alt="">
                    <h3>Orchid Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Dahlia.png" alt="">
                    <h3>Dahlia Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Lavendar.png" alt="">
                    <h3>Lavendar Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Lilac.png" alt="">
                    <h3>Lilac Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
                <div class="swiper-slide box">
                    <img src="image/Common Daisy.png" alt="">
                    <h3>Common Daisy Plant</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
    
            </div>
    
        </div>
    </section>
        
    <!-- products section ends -->


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


    <script src="./js/product-details-script.js"></script>
</body>

</html>