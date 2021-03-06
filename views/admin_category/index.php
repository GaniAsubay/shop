<?php
include (ROOT . '/views/parts/header_admin.php');
?>

<section>
    <div class="container_admin">
        <a href="/admin/category/add" class="add_cat">
            Санат қосу
        </a>
        <h4 id="admin_list_h4">Санаттар тізімі</h4>
        <table id="admin_product_list" cellspacing="0">
            <tr>
                <th>Санат идентификаторы</th>
                <th>Категория атауы</th>
                <th>Реттік нөмір</th>
                <th>Күй</th>
            </tr>

            <?php foreach ($categories as $category):?>
                <tr>
                    <td><?php echo $category['id']?></td>
                    <td><?php echo $category['name']?></td>
                    <td><?php echo $category['sort_order']?></td>
                    <td>
                        <?php echo Category::getStatusText($category['status']);?>
                    </td>
                    <td><a title="Редактировать" href="/admin/category/edit/<?php echo $category['id']?>" class="del">
                            <img src="../../template/images/edit.png" alt="">
                        </a></td>
                    <td><a title="Удалить" href="/admin/category/delete/<?php echo $category['id']?>" class="del">
                            <img src="../../template/images/del.png" alt="">
                        </a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</section>
<div class="appendix"></div>

<?php
include (ROOT . '/views/parts/footer_admin.php');
?>
