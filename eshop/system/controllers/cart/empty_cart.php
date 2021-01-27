<?php 
session_start();
$_SESSION['cart'] = [];
header('Location:'.$_SERVER['HTTP_REFERER']);
