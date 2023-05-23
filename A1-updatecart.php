<?php

session_start();


$name = $_POST['name0'];
$price = $_POST['name1'];
$quantity = $_POST['name2'];

$event = $_POST['event'];

$products = array($name,$price,$quantity);

if($event == "update"){

    $_SESSION[$name] = $products;

}
else if($event == "delete"){

    unset($_SESSION[$name]);

}
header('location:A1-viewcart.php');

?>