<?php include __DIR__ . '/../partials/header.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <div class="container">
        <table class="table is-striped">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td><?= $post->id ?></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><?= $post->title ?></td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td><?= $post->body ?></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php include __DIR__ . '/../partials/footer.php' ?>