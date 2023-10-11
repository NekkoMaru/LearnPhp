
    <?php include __DIR__. '/partials/header.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <div class="container">
    <div class="columns">
        <?php foreach ($posts as $post): ?>
        <div class="column is-one-quarter">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <?=$post->title?>
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <?=$post->snippet()?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
    <?php include __DIR__.'/partials/footer.php' ?>