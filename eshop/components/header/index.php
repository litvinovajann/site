<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title> <?php echo $_GET['title'] ?></title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
                         <div class="header-left">
                            <a href="index.php?category=0&title=Eshop"class="sh">SH</a>
                            <a href="catalogue.php?category=1&title=Women's Apparel">Women</a>
                            <a href="catalogue.php?category=2&title=Men Clothing">Men</a>
                            <a href="catalogue.php?category=3&title=Children's clothing">Children</a>
                            <a href="catalogue.php?category=4&title=New In">New in</a>
                            <a href="catalogue.php?category=5&title=About Us">About us</a>
                        </div>
                        <div class="header-right">
                           <a class="a-header"href="?title=Log In"> 
                               <div class="bg-fix icon-header" style="background-image: url('img/login.svg')"></div>
                               <div class="log-in">Log-in</div>
                            </a>
                           <a class="a-header"href="cart.php?title=Cart">
                                <div class="bg-fix icon-header" style="background-image: url('img/cart.svg')"></div> 
                                <div class="cart">Cart(<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)</div>
                            </a>
                        </div>

        </header>



        <main>

