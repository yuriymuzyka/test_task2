    <h1>Страница с продуктами</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Тип продукта</th>
                <th><b>Редактировать</b></th>
                <th><b>Удалить</b></th>
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td>{{ product.name }}</td>
                <td>{{ product.count }}</td>
                <td>{{ product.id_category }}</td>
                <td><a href="/product/edit/{{product.id_product}}">Редактировать</a></td>
                <td><a href="/product/delete/{{product.id_product}}">Удалить</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    Общее количество видов товаров - {{text}}
    <p>
        <a href="/product/add">Добавить новый</a>
    </p>


