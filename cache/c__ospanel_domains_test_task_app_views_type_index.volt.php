<h1>Страница с категориями</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Название категории</th>
            <th><b>Редактировать</b></th>
            <th><b>Удалить</b></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($types as $type) { ?>
        <tr>
            <td><?= $type->type ?></td>
            <td><a href="/type/edit/<?= $type->id_type ?>">Редактировать</a></td>
            <td><a href="/type/delete/<?= $type->id_type ?>">Удалить</a></td>
        </tr>
     <?php } ?>
    </tbody>
</table>

<p>
    <a href="/type/add">Добавить новую</a>
</p>