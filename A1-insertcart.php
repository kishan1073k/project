<?php


session_start();


// $name = $_POST['name'];
// $price = $_POST['price'];
// $quantity = $_POST['qty'];

// $product = array($name,$price,$quantity);

// //print_r($product);

// $_SESSION[$name] = $product;

// header('location:A1-testshowdynamicimg.php');

$product_image = $_POST['PImage'];
$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quantity = $_POST['PQuantity'];


if(isset($_POST['addcart'])){


  //  $check_product = array_column($_SESSION['cart'],'productName');

    // if(in_array($product_name, $check_product)){

    
    //    header('location:A1-testshowdynamicimg.php');


    // }
    // else{


    $_SESSION['cart'][]= array('productImage' => $product_image,'productName' => $product_name ,
                                'productPrice' => $product_price , 
                                'productQuantity' => $product_quantity);
                                header("location:A1-viewcart.php");

   // }

    print_r($_SESSION['cart']);

    // header('location:A1-testshowdynamicimg.php');




}


        // remove product code

        if(isset($_POST['remove'])){

            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['productName'] === $_POST['item'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    header('location:A1-viewcart.php');
                }

            }

          

        }

          //update code

          if(isset($_POST['update'])){

            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['productName'] === $_POST['item'])
                {
                    $_SESSION['cart'][$key] =array('productImage' => $product_image,'productName' => $product_name ,
                    'productPrice' => $product_price , 
                    'productQuantity' => $product_quantity);
                    header('location:A1-viewcart.php');

                    
                }

            }

          

        }



?>