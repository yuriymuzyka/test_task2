<div class="row">
    <div class="container col-lg-6 col-offset-3">
        <h4>Добавление новой категории продуктов</h4>
        {{ form("method": "post") }}
             <div class="form-group">
                <label for="name">Введите название категории</label>
                {{ text_field("name", "class":"form-control", "size": 30) }}
             </div>
            {{ submit_button("Add type", "class": "btn btn-info") }}
        {{ endForm() }}
    </div>
</div>