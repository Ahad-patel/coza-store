<?php
session_start();


if(isset($_POST['Login'])){

    include("../partials/connect.php");

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * from customers Where username='$email' AND  password='$password'";

    $result=$connect->query($sql);

    $final=$result->fetch_assoc(); 

    $_SESSION['email']=$final['username'];
    $_SESSION['password']=$final['password'];
    $_SESSION['customer_id']=$final['id'];

    if($email=$final['username'] AND $password=$final['password']){
        header('location:../cart.php');
    }else{
        echo"<script>alert('Username or Password is incorrec please check if caps lock is off or not')
        window.location.href='../customer_form.php';
        </script>";
        
    }
}

?>
