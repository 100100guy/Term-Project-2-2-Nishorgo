<?php include('NishorgoServer.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishorgo | Admin Profile</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    
    <link rel="stylesheet" href="./css/style.css">
   

</head>

<body>
<header class="header">

<a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>

<nav class="navbar">
   
        <a href="AdminAddProduct.php" class="nav-item nav-link active">Add Products</a>
        <a href="ProductList.php" class="nav-item nav-link active">Products List</a>
        <a href="PlaceOrder.php" class="nav-item nav-link active">Placed Orders</a>
        <div class="navbar-nav ms-auto">
            <a href="index.php?logout='1'" class="nav-item nav-link active">Logout </a>
        </div>
    
    
</nav>


</header>
<section class="home" id="home">
    <div class="student-profile py-4">

            <?php

            $dbCon = mysqli_connect('localhost', 'root', '', 'nishorgo');
            if (mysqli_connect_errno()) {
                echo 'could not connect to server.';
            }
            $name = $_SESSION["username"];
            $sql = "SELECT * From admin WHERE name = '$name';";
            $result = mysqli_query($dbCon, $sql) or die("Error in $sql");
            $row = mysqli_fetch_assoc($result);

            ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <?php echo "<img class='profile_img' src = '{$row['img']}' width = 50% >"; ?>
                            <h3><?php echo $row['name']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-lg">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Admin Info</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Name</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Email</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['Email']; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Phone</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['phone_no']; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Location</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $row['address']; ?></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div style="height: 26px"></div>
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