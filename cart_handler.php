<?php 
    session_start();
    if (isset($_SESSION['cart'])) {

        $check=array_column($_SESSION['cart'],'item_name');
        if(in_array($_GET['cart_name'],$check)){
            echo "<script>
                alert('Product is  Already in the cart');
                window.location.href='product.php';
            </script>";
        }else{
            $count = count($_SESSION['cart']); //count function for counting the prodct
            $_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'],
                                            'item_name'=>$_GET['cart_name'], 
                                            'item_price'=>$_GET['cart_price'],
                                            'quantity'=>1);
    
            echo "<script>alert('product added');
            window.location.href='product.php';
            </script>";
        }                              
    }       
     else {
        $_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'],
                                    'item_name'=>$_GET['cart_name'], 
                                    'item_price'=>$_GET['cart_price'],
                                'quantity'=>1);
    
    echo "<script>
        alert('product Added');
        window.location.href='product.php';
    </script>";
                              
}


    
?>