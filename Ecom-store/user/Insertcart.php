<?php
    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];
session_start();
if (isset($_SESSION['user'])) {
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(isset($_POST['addCart'])){
    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];
    $check_product = array_column($_SESSION['cart'] , 'productName');
    if(in_array($product_name, $check_product)){
        echo "
        <script>
        alert('product already added');
        window.location.href='index.php'
        </script>";
    }
    else{
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_quantity = $_POST['PQuantity'];
   $_SESSION['cart'][] = array('productName' =>$product_name,
         'productPrice' =>$product_price,
         'productQuantity'=>$product_quantity );
             header("location:viewcart.php");
    }
}







if (isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
        if(($value)['productName'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values( $_SESSION['cart']);
            header('location:viewcart.php');
        }
    }
}





// UPDATE


if (isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
        if(($value)['productName'] === $_POST['item']){
            $_SESSION['cart'][$key] = array('productName' => $product_name,
            'productPrice' => $product_price,
            'productQuantity' => $product_quantity);
            header('location:viewcart.php');
        }
    }
}

}else{
    header("location:form/login.php");
}

?>