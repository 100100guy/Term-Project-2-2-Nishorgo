<?php

	$deleteID = $_GET['deleteID'];
    $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
    if(mysqli_connect_errno()){
        echo 'could not connect to server.';
    }

    //$sql =  "DELETE FROM product WHERE product.product_id = '$deleteID'; " ;
    $sql = "CALL deleteproduct('$deleteID') ;" ;
    $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
    header('location:ProductList.php');

?>