<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Страница редактирования категории</h4>
        {{ form("method": "post") }}
            <div class="form-group">
                <label for="name">Введите навзание категории</label>
                {{ text_field("name", "class":"form-control", "size": 30, "value": category.name) }}
            </div>

            {{ submit_button("Сохранить изминения", "class": "btn btn-info") }}
        {{ endForm() }}
        <br />
        <p>
            <a href="/type">Отмена</a>
        </p>
    </div>
</div>