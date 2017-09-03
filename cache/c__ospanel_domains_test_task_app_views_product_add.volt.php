<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Добавление нового продукта</h4>

        <?= $this->tag->form(['method' => 'post']) ?>
            <div class="form-group">
                <label for="name"> Введите наименование продукта </label>
                <?= $this->tag->textField(['name', 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <label for="name"> Введите количество товара </label>
                <?= $this->tag->textField(['count', 'class' => 'form-control', 'pattern' => '^[0-9]*$']) ?>
            </div>
            <div class="form-group">
                <label for="name"> Выберите тип продукта </label>
                <?= $this->tag->select(['category', $categories, 'using' => ['id_category', 'name'], 'useEmpty' => true, 'emptyText' => 'Выберите один из вариантов', 'emptyValue' => '@', 'class' => 'form-control']) ?>
            </div>

            <?= $this->tag->submitButton(['Добавить продукт', 'class' => 'btn btn-info']) ?>
        <?= $this->tag->endform() ?>
    </div>
</div>