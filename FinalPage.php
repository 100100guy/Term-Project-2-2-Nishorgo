<?php 

    include('NishorgoServer.php');

    $user =  $_SESSION["username"];

    if (isset($_POST['placeOrder'])) {
        $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
        if(mysqli_connect_errno()){
            echo 'could not connect to server.';
        }
        $sql = "SELECT MAX(oid_main) AS maximum From orders ;" ;
        $result = mysqli_query($dbCart,$sql);
        $count=mysqli_fetch_assoc($result);
        $res1=0;
        if(!isset($count['maximum'])){
            $res1=0;
        }
        else{
            $res1=$count['maximum'];
        }
        $res1=$res1+1;

        

        $sql = "SELECT * From cart WHERE cart.UserName = '$user';" ;
        $result = mysqli_query($dbCart,$sql);
        $resultCheck = mysqli_num_rows($result);
        

        if($resultCheck>0){
            while ($row = mysqli_fetch_assoc($result)){
                $productID = $row['CartProductID'];
                $quantity = $row['CartQuantity'];
                $sql = "INSERT INTO orders (oid_main, UserName, ProductID, OrderQuantity) VALUES ('$res1','$user', '$productID', '$quantity')";
                $res = mysqli_query($dbCart,$sql);
                $sql = "SELECT quantity From product WHERE product_id = '$productID'";
                $res = mysqli_query($dbCart,$sql);
                $info = mysqli_fetch_assoc($res);
                $updatedQuantity= $info['quantity'] - $quantity;
               // $sql = "UPDATE product SET quantity = '$updatedQuantity' WHERE product.product_id = '$productID';";
                $res = mysqli_query($dbCart,$sql);
            }
        }
           // $sql = "DELETE FROM `cart` WHERE `cart`.`UserName` = '$user';" ;
           // $result = mysqli_query($dbCart,$sql);
            

            header('location: order-complete.php');

    }

    

?>