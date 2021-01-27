<?php
session_start();
$cart = $_SESSION['cart'];
$id = $_GET['id'];

var_dump($cart);
$cart_new = [];
foreach($cart as $good_id) {
   if ($good_id != $id) {
       $cart_new[] = $good_id;
   }
}

var_dump($cart_new);
$_SESSION['cart'] = $cart_new;  
header('Location:'.$_SERVER['HTTP_REFERER']);