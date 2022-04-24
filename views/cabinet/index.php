<?php
include(ROOT . '/views/parts/header.php');
?>
<section>
    <div class="container">
        <h2>Жеке кабинет</h2>
        <h4 id="cabinet_greeting">Привет, <?php echo $user['name']; ?></h4>
        <ul id="cabinet_list">
           <li><a href="/cabinet/edit">Жеке деректерді өңдеу</a></li>
           <li><a href="/cabinet/orders">Сатып алу тізімі</a></li>
        </ul>
    </div>
</section>
<div class="appendix"></div>
<?php
include(ROOT . '/views/parts/footer.php');
?>
