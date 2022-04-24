<?php
include (ROOT . '/views/parts/header_admin.php');
?>

<section>
    <div class="container">
        <h2>Жаңа элемент қосу</h2>
        <form action="#" method="post" id="add_form">

            <p>Категория атауы</p>
            <input required type="text" name="name">

            <p>Реттік нөмір</p>
            <input required type="text" name="sort_order">

            <p>Көрсету статусы</p>
            <select name="status">
                <option value="1" selected>Көрсету</option>
                <option value="0">Жасыру</option>
            </select>

            <input type=submit name="submit" value="Сохранить" id="add_btn">
        </form>
    </div>
</section>
<div class="appendix"></div>
<?php
include (ROOT . '/views/parts/footer_admin.php');
?>
