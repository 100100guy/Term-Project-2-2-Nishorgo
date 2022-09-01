<?php
	
	include('NishorgoServer.php');

	$dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
    if(mysqli_connect_errno()){
	    echo 'could not connect to server.';
	}

	$rating = $_POST['rating'];
	$productID = $_POST['productID'];

	$sql = "SELECT * From product WHERE product_id= '$productID';" ;
    //$result = mysqli_query($dbCart,$sql);
    // $row = mysqli_fetch_assoc($result);

    // $totalRating= $row['rating'] * $row['ratedcount'];
    //$newTotalRating = $totalRating + $rating;
    //$newRatedCount = $row['ratedcount'] + 1;
    //$newRating = $newTotalRating/$newRatedCount;

    // $sql = "UPDATE product SET rating = '$newRating', ratedcount = '$newRatedCount' WHERE product_id = '$productID';" ;
    //$result = mysqli_query($dbCart,$sql);
     mysqli_query($dbCart,"CALL userrateproduct($rating, $productID)");

    header("location:ProductDetails.php?product_id=$productID");
?>