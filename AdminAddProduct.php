<?php 

	if(isset($_POST['save'])){

		$name = $_POST['productName'];
		$category = $_POST['productCategory'];
		$quantity = $_POST['productQuantity'];
		$price = $_POST['productPrice'];
		$details = $_POST['productDetails'];
		$imageName = $_FILES['productImage']['name'];
    

		$target = 'image/'. $imageName;
		move_uploaded_file($_FILES['productImage']['tmp_name'], $target);

		$dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }

       // $sql = "INSERT INTO product (product_name,category,quantity, price,image,description) VALUES ('$name','$category', '$quantity', '$price', '$target', '$details');" ;
        $sql = "CALL addnewproduct('$name','$category', '$quantity', '$price', '$target', '$details') ;" ;
        $result = mysqli_query($dbCart,$sql);
        //mysqli_query($dbCart,"CALL addnewproduct( $category,@name, $quantity, $price, @target, @details)");
       // $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

        header('location:AdminAddProduct.php');

	}

?>

<?php include('NishorgoServer.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishorgo</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <link rel="stylesheet" href="AdminProfileStyleSheet.css">

</head>

<body>
    <div class="student-profile py-4">
        <div class="container">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Bootstrap Navbar with Logo Image</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

                
                
                 <link rel="stylesheet" href="css/style.css">
            </head>

            <body>
            <header class="header">

            <a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>

            <nav class="navbar">
   
                <a href="AdminProfile.php" class="nav-item nav-link active">Admin profile</a>
                <a href="ProductList.php" class="nav-item nav-link active">Products List</a>
                <a href="PlaceOrder.php" class="nav-item nav-link active">Placed Orders</a>
                <div class="navbar-nav ms-auto">
                <a href="index.php?logout='1'" class="nav-item nav-link active">Logout </a>
                </div>
    
    
            </nav>


            </header>
        <section class="home" id="home">
        <div class="container" id="addProduct">
                <div class="row">
                    <div class="col-4 offset-md-4 form-div">
                        <div class="col-lg-30">
                            <div class="card shadow-lg p-3 mb-10 bg-yellow rounded">   
            
                                <form action="AdminAddProduct.php" method="post" enctype="multipart/form-data">

                                    <h3 class="text-center">Add Product</h3>

                                    <div class="form-group">
                                        <label for="profileImage">Product Image</label>
                                        <input cols="43" type="file" name="productImage" id="profileImage" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Product Name</label>
                                        <textarea name="productName" id="" cols="36" rows="2"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="Category">Choose Category</label>
                                    

                                    <select class="form-select" name=" productCategory" aria-label="Default select example">
                                        <option selected>Choose a category for the product</option>
                                        <option value="1">vegetable</option>
                                        <option value="2">flower</option>
                                        <option value="3">fruit</option>
                                        <option value="4">tools</option>
                                       
                                    </select></div>

                                    <div class="form-group">
                                        <label for="Price">Product Quantity</label>
                                        <textarea  name="productQuantity"  id="" cols="36" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="img_dir">Product Price</label>
                                        <textarea  name="productPrice" id="" cols="36" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Details">Product Details</label>
                                        <textarea  name="productDetails" id="" cols="36" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="save" class="btn btn-primary btn-block">ADD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
            


            </body>

            </html>

        </div>

    </div>

</body>

</html>