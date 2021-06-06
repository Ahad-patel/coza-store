<?php

    session_start();
    
    include('../partials/connect.php');
    
    $total=$_POST['total'];

    $phone=$_POST['phone'];

    $address=$_POST['address'];

    $customer_id=$_SESSION['customer_id'];

    $payment=$_POST['payment'];

    $sql="INSERT INTO orders(customer_id, address, phone, total, pay_method) VALUES('$customer_id', '$address', '$phone', '$total',$payment)";
    $connect->query($sql);
    
    $sql2="Select id from orders order by id DESC limit 1";
    $result=$connect->query($sql2);
    $final=$result->fetch_assoc();
    $order_id=$final['id'];

    foreach($_SESSION['cart'] as $key => $value){
        $pro_id=$value['item_id'];
        $quantity=$value['quantity'];

        $sql3="INSERT into order_details(order_id,product_id,quantity) VALUES('$order_id','$pro_id','$quantity')";

        $connect->query($sql3);
    }

    if ($payment=="paypal"){
        $_SESSION['total']=$total;
        header('location: paypal.php');
    }else{

    echo "<script> alert('ORDER IS PLACED');
          window.location.href='../index.php';
          </script>";
    }
unset($_SESSION['cart']);
?>