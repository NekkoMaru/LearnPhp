<?php
    $name = 'Kaspar';
?>

<?php include __DIR__ . '/partials/header.php' ?> 
    <h1>Hello!!!! <?=1+2?> <?=$name?></h1>
    <ul>
        <?php for($i = 0; $i<10; $i++): ?>
            <li><?=$i?></li>
        <?php endfor; ?>
    </ul>
<?php include __DIR__ . '/partials/footer.php' ?> 