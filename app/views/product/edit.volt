<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Страница редактирования продукта</h4>

        {{ form("method": "post") }}
            <div class="form-group">
                <label for="name">Введите наименование продукта</label>
                {{ text_field("name", "class":"form-control", "value": product.name) }}
            </div>
            <div class="form-group">
                <label for="count">Введите количество товара</label>
                {{ text_field("count", "class":"form-control", "value": product.count, "pattern":"^[0-9]*$") }}
            </div>
            <div class="form-group">
                <label for="type">Выберите тип продукта</label>
                {{ select('category', categories, 'using': ['id_category', 'name'], 'useEmpty': true, 'emptyText': 'Выберите один из вариантов', 'emptyValue': '@',
                "value": product.id_category, "class":"form-control") }}
            </div>

            {{ submit_button("Сохранить изменения", "class": "btn btn-info") }}
        {{ endForm() }}
        <br />
        <p>
            <a href="/product/">Отмена</a>
        </p>
    </div>
</div>