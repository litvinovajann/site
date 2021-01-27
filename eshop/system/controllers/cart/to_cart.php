<?php
//function required to work with sessions
session_start(); 
//this file puts the goods into basket
//read the id of the good chosen
$id = $_GET['id'];
if (isset ($_SESSION ['cart'])) {
    $cart = $_SESSION ['cart']; //если есть то мы считываем содержимое корзины 
}
else {
    $cart = []; // если нет то создаем массив пустой корзины
};
//запихиваем товар 
//если такого товара не было, то пишем
//если такой товар уже есть, то не пишем
if (!in_array($id,$cart)) {
    $cart[] = $id;
}
//кладем все товары обратно в сессию 
$_SESSION['cart'] = $cart;
//redirect
var_dump($cart);
header('Location:'.$_SERVER['HTTP_REFERER']);
