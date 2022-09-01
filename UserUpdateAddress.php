<?php
include('NishorgoServer.php');
    $user =  $_SESSION["username"];

	$addr = $_POST['address'];
    $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
    if(mysqli_connect_errno()){
        echo 'could not connect to server.';
    }

    $sql =  "UPDATE user SET user.address='$addr' WHERE user.username = '$user'; " ;
   
    $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
    header('location:UserProfile.php');

?>