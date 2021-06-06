<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="e_comm_project";

    // connection string

    $connect=mysqli_connect($host,$user,$password,$dbname);


    // // check if connection is stablished with db or not 

    // if($connect->mysqli_error){
    //     echo "no connection is stablished";
    // }else{
    //     echo "we are good to go";
    // }

?>