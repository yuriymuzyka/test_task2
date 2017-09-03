<h1>Страница с категориями</h1>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Название категории</th>
            <th><b>Редактировать</b></th>
            <th><b>Удалить</b></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category) { ?>
        <tr>
            <td><?= $category->name ?></td>
            <td><a href="/category/edit/<?= $category->id_category ?>">Редактировать</a></td>
            <td><a href="/category/delete/<?= $category->id_category ?>">Удалить</a></td>
        </tr>
     <?php } ?>
    </tbody>
</table>

<p>
    <a href="/category/add">Добавить новую</a>
</p>