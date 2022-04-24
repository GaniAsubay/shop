<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Football shop</title>
    <link href="<?php ROOT?>/template/css/main.css" rel="stylesheet">
    <script src="<?php ROOT?>/template/js/jquery.js"></script>
</head>
<body>
<div id="wrapper">
<header id="header">
    <div class="header_middle">
        <a href="/" class="logo"><img alt="" src="<?php ROOT?>/template/images/logo.png" /></a>

        <ul class="header_middle_nav">
        <?php if(User::isGuest()):?>
            <li><a href="/cart">
                    Жәшік
            (<span class="cart_count"><?php echo Cart::itemsCount();?></span>)
            </a></li>
            <li><a href="/user/register">Тіркелу</a></li>
            <li><a href="/user/login">Кіру</a></li>
        <?php else:?>
            <li><a href="/cart">
                    Жәшік
                    (<span class="cart_count"><?php echo Cart::itemsCount();?></span>)
                </a></li>
            <li><a href="/cabinet">Жеке кабинет</a></li>
            <li><a href="/user/logout">Шығу</a></li>
        <?php endif;?>
        </ul>
    </div>
    <div class="header_bottom">
        <ul class="header_bottom_nav">
            <li><a href="/">Басты бет</a></li>
            <li><a href="/catalog/">Каталог</a></li>
            <li><a href="/cart">Жәшік</a></li>
        </ul>
    </div>
</header>