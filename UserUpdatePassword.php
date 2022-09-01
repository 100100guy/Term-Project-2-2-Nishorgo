<?php
include('NishorgoServer.php');
    $user =  $_SESSION["username"];

    $newpass = $_POST['newpassword'];
    $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
    if(mysqli_connect_errno()){
        echo 'could not connect to server.';
    }
    $password = md5($newpass);

    $sql =  "UPDATE user SET user.password='$password' WHERE user.username = '$user'; " ;

   
    $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
    header('location:UserProfile.php');

?>