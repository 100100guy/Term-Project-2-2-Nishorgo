<?php
	
	$errors =array();
	include('NishorgoServer.php');

	if(empty($_GET['user'])){
		header('location:login.php');
	}

	else if(isset($_GET['addCartID'])){

		$dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
        if(mysqli_connect_errno()){
    	    echo 'could not connect to server.';
   		}

		$id = $_GET['addCartID'];
		$count = $_POST['count'];
		$user = $_GET['user'];

		$sql = "SELECT * FROM product WHERE product_id = '$id';" ;
    	$result = mysqli_query($dbCart,$sql);
		$row = mysqli_fetch_assoc($result);
		$q=$row['quantity'];
		if($count > $q){
			
			header("location:productdetails.php?product_id=$id");
			
		}
		else{

		//$sql = "INSERT INTO cart (UserName, CartProductID, CartQuantity) VALUES ('$user', '$id', '$count') ON DUPLICATE KEY UPDATE CartQuantity = '$count';" ;
		$sql = "CALL cartaddproduct('$user', '$id', '$count') ;" ;
    	$result = mysqli_query($dbCart,$sql);
    	header("location:cart.php?user=$user");
		}
	}

?>