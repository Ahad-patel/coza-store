<?php
    include('../partials/connect.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    if($password==$confirm_password){
      $sql="INSERT INTO customers(username,password) values ('$email','$password')"; 
      $connect->query($sql);
        echo"<script>alert('Registered Successfully');
      
        </script>";
        header('location:../customer_form.php');
    
    // }elseif($password==null or $confirm_password==null){
    //     echo"<script>alert('password can not be empty);
    //         window.location.href='../customer_form.php';
    //         </script>";
    
        }else{
        echo"<script>alert('password did not match');
            window.location.href='../customer_form.php';
            </script>";
    }
   
?>