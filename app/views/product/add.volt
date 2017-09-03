<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Добавление нового продукта</h4>

        {{ form("method": "post") }}
            <div class="form-group">
                <label for="name"> Введите наименование продукта </label>
                {{ text_field("name", "class":"form-control") }}
            </div>
            <div class="form-group">
                <label for="name"> Введите количество товара </label>
                {{ text_field("count", "class":"form-control", "pattern":"^[0-9]*$") }}
            </div>
            <div class="form-group">
                <label for="name"> Выберите тип продукта </label>
                {{ select('category', categories, 'using': ['id_category', 'name'], 'useEmpty': true, 'emptyText': 'Выберите один из вариантов', 'emptyValue': '@', "class":"form-control") }}
            </div>

            {{ submit_button("Добавить продукт", "class":"btn btn-info") }}
        {{ endForm() }}
    </div>
</div>