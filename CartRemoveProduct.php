<?php
	
	include('NishorgoServer.php');

	if(isset($_GET['deleteID'])){

		$dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
        if(mysqli_connect_errno()){
    	    echo 'could not connect to server.';
   		}
		$id = $_GET['deleteID'];
        $user = $_SESSION["username"];
		//$sql = "delete From cart WHERE CartProductID = $id and UserName='$user';" ;
		$sql = "CALL cartremoveproduct('$id', '$user') ;" ;
    	$result = mysqli_query($dbCart,$sql);
    	
    	header("location:cart.php?user=$user");
	}

?>
