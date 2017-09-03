<h1>Product Page</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Product name</th>
            <th>Product count</th>
            <th><b>Edit</b></th>
            <th><b>Delete</b></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $product->name ?></td>
        <td><?= $product->count ?></td>
        <td><a href="/product/edit/<?= $product->id_product ?>">edit</a></td>
        <td><a href="/product/delete/<?= $product->id_product ?>">delete</a></td>
    </tr>
    </tbody>
</table>

<p>
    <a href="/product/">Go to back</a>
</p>