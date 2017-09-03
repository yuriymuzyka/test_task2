<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Добавление новой категории продуктов</h4>
        <?= $this->tag->form(['method' => 'post']) ?>
             <div class="form-group">
                <label for="name">Введите название категории</label>
                <?= $this->tag->textField(['name', 'class' => 'form-control', 'size' => 30]) ?>
             </div>
            <?= $this->tag->submitButton(['Add type', 'class' => 'btn btn-info']) ?>
        <?= $this->tag->endform() ?>
    </div>
</div>