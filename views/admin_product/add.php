<?php
include (ROOT . '/views/parts/header_admin.php');
?>

<section>
    <div class="container">
        <h2>Жаңа элемент қосу</h2>
            <form action="#" method="post" id="add_form" enctype="multipart/form-data">

                <p>Өнім атауы</p>
                <input required type="text" name="name">

                <p>Өнім коды</p>
                <input required type="text" name="code">

                <p>Бағасы</p>
                <input required type="text" name="price">

                <p>Санат</p>
                <select name="category">
                    <?php if (is_array($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['id']; ?>">
                                <?php echo $category['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>

                <p>Өндіруші</p>
                <input required type="text" name="brand">

                <p>Өнім суреті</p>
                <input type="file" name="image">

                <p>Егжей-тегжейлі сипаттама</p>
                <textarea id="add_description" name="description"></textarea>

                <p>Қоймада болуы</p>
                <select name="availability">
                    <option value="1" selected>Иә</option>
                    <option value="0">Жоқ</option>
                </select>

                <p>Жаңа</p>
                <select name="is_new">
                    <option value="1" selected>Иә</option>
                    <option value="0">Жоқ</option>
                </select>

                <p>Статус</p>
                <select name="status">
                    <option value="1" selected>Көрсетіледі</option>
                    <option value="0">Жасырын</option>
                </select>
                <input type=submit name="submit" value="Сохранить" id="add_btn">
            </form>
    </div>
</section>
<div class="appendix"></div>
<?php
include (ROOT . '/views/parts/footer_admin.php');
?>
