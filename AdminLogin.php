<?php include('NishorgoServer.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login Form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	
	
<div class="wrapper">
<div class="title">Admin Login Form</div>
	<form method="post" action="AdminAuth.php">
		<?php include('errors.php'); ?>
		<div class="field">
			<label>Admin Name</label>
			<input type="text" name="username">
		</div>
		<div class="field">
			<label>PassCode</label>
			<input type="password" name="password">
		</div>
		<div class="field">
			<button type="submit" name="login" class="Button">Login</button>
		</div>
	</form>
</div>
	
</body>
</html>