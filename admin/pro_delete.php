<?php
    include('../partials/connect.php');

    $new_id=$_GET['del_id'];

    $sql="DELETE from products where id='$new_id'";

    if(mysqli_query($connect,$sql)){
        header('location: product_show.php');
    }else{
        echo "not Deleted";
    }

?>