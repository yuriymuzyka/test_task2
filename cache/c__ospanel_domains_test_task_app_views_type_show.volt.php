<h1>Type Page</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Product type</th>
            <th><b>Edit</b></th>
            <th><b>Delete</b></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $type->type ?></td>
        <td><a href="/type/edit/<?= $type->id_type ?>">edit</a></td>
        <td><a href="/type/delete/<?= $type->id_type ?>">delete</a></td>
    </tr>
    </tbody>
</table>

<p>
    <a href="/type/">Go to back</a>
</p>