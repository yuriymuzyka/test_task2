<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Страница редактирования продукта</h4>

        <?= $this->tag->form(['method' => 'post']) ?>
            <div class="form-group">
                <label for="name">Введите наименование продукта</label>
                <?= $this->tag->textField(['name', 'class' => 'form-control', 'value' => $product->name]) ?>
            </div>
            <div class="form-group">
                <label for="count">Введите количество товара</label>
                <?= $this->tag->textField(['count', 'class' => 'form-control', 'value' => $product->count, 'pattern' => '^[0-9]*$']) ?>
            </div>
            <div class="form-group">
                <label for="type">Выберите тип продукта</label>
                <?= $this->tag->select(['category', $categories, 'using' => ['id_category', 'name'], 'useEmpty' => true, 'emptyText' => 'Выберите один из вариантов', 'emptyValue' => '@', 'value' => $product->id_category, 'class' => 'form-control']) ?>
            </div>

            <?= $this->tag->submitButton(['Сохранить изменения', 'class' => 'btn btn-info']) ?>
        <?= $this->tag->endform() ?>
        <br />
        <p>
            <a href="/product/">Отмена</a>
        </p>
    </div>
</div>