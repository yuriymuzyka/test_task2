<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Добавление нового типа продуктов</h4>

        <?= $this->tag->form(['method' => 'post']) ?>
             <div class="form-group">
                <label for="type">Enter type name </label>
                <?= $this->tag->textField(['type', 'class' => 'form-control', 'size' => 30]) ?>
             </div>
            <?= $this->tag->submitButton(['Add type', 'class' => 'btn btn-info']) ?>
        <?= $this->tag->endform() ?>
    </div>
</div>