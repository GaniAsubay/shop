<?php
include (ROOT . '/views/parts/header.php');
?>
<section id="cart_section">
    <div class="container">
        <!--left sidebar-->
        <div class="sidebar">
            <h2>Санаттар</h2>
            <ul class="left_sidebar">
                <?php foreach ($categories as $catItem): ?>
                    <li><a href="/category/<?php echo $catItem['id']?>">
                            <?php echo $catItem['name']?>
                        </a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!--main content-->
        <div class="content">
            <h2>Жәшік</h2>

            <?php if ($res): ?>
                <p>Тапсырыс өңделеді. Біз сізге қайта қоңырау шаламыз.</p>
            <?php else: ?>

            <p>Таңдалған өнімдер: <?php echo $totalQuantity; ?>, сомасына: <?php echo $totalPrice; ?> тнг</p><br/>

            <?php if (!$res): ?>

            <?php if (isset($errors) && is_array($errors)):?>
                <ul class="errors" id="error_checkout">
                    <?php foreach($errors as $error):?>
                        <li> - <?php echo $error;?></li>
                    <?php endforeach;?>
                </ul>
            <?php endif;?>
            <form action="#" method="post" id="checkout_form">
                <p>Тапсырыс беру үшін пішінді толтырыңыз. Біздің менеджер сізбен байланысады.</p>
                <input required type="text" name="name" placeholder="Атыңызды енгізіңіз" value="<?php echo $userName;?>">
                <input required type="tel" name="tel" placeholder="Телефон пішімі: 8(xxx)-xxx-xx-xx">
                <textarea name="comment" placeholder="Комментарий к заказу"></textarea>
                <input type=submit name="submit" value="Оформить заказ" id="check_btn">
            </form>
            <?php endif;?>

            <?php endif;?>
        </div>
    </div>
</section>
<div class="appendix"></div>
<?php
include (ROOT . '/views/parts/footer.php');
?>
