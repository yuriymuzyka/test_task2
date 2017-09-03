<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Страница редактирования категории</h4>
        <?= $this->tag->form(['method' => 'post']) ?>
            <div class="form-group">
                <label for="name">Введите навзание категории</label>
                <?= $this->tag->textField(['name', 'class' => 'form-control', 'size' => 30, 'value' => $category->name]) ?>
            </div>

            <?= $this->tag->submitButton(['Сохранить изминения', 'class' => 'btn btn-info']) ?>
        <?= $this->tag->endform() ?>
        <br />
        <p>
            <a href="/type">Отмена</a>
        </p>
    </div>
</div>