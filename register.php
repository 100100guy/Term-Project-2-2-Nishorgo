<?php include('NishorgoServer.php'); ?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishorgo | Registration Page</title>

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/reg-style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>-->
</head>

<body>
    <div class="container">
        <header>Registration</header>

        <form action="register.php" method="post" >
        <?php include('errors.php'); ?>
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Enter your name" required>
                        </div>

                        

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="pass1" placeholder="Enter password" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input type="password" name="pass2" placeholder="Confirm Password" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="phone" placeholder="Enter mobile number" required>
                        </div>

                        
                        <div class="input-field details address">
                            <label> Address</label>
                            <input type="text"name="address" placeholder="Delivery Address" required>
                        </div>

                    </div>
                </div>

                <div class="buttons">
                    <div class="backBtn">
                        <i class="uil uil-navigator"></i>
                        <a href="login.php" class="btnText"><span class="btnText"><p class="btnText">Back</p></span></a>
                        
                    </div>
                    <button type="submit" name="register" class="sumbit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="./js/reg-form.js"></script>
</body>

</html>