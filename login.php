<?php include('NishorgoServer.php'); ?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>Nishorgo | Login Page</title>

    <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">Login Form</div>
        <form method="post" action="login.php">
        <?php include('errors.php'); ?>
            <div class="field">
                 
                <input type="text"  name="username" required>
                <label >Username</label>
                
            </div>
            <div class="field">
            
                <input type="password" name="password" required>
                <label>Password</label>
                
            </div>
          
            <div class="field">
                <button type="submit" name="login" class="Button">Login</button>
            </div>
            <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
        </form>
    </div>
</body>

</html>