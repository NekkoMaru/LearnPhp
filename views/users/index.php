
<?php include __DIR__ . '/../partials/header.php' ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<div class="container">
    <a class="button is-primary" href="/admin/users/new">Add User</a>
    <table class="table is-fullwidth is-striped">
        <thead>
        <th>Id</th>
        <th>Email</th>
        <th>Actions</th>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->email?></td>
                <td>
                    <div class="buttons has-addons">
                        <a class="button is-info" href="/admin/users/view?id=<?=$user->id ?>">View</a>
                        <a class="button is-warning" href="/admin/users/edit?id=<?=$user->id ?>">Edit</a>
                        <a class="button is-danger" href="/admin/users/delete?id=<?=$user->id ?>">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>