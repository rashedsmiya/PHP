<?php if (false) : ?>
    <h1>Hello1</h1>
<?php elseif (true) : ?>
    <h1>Hello2</h1>
<?php elseif (true) : ?>
    <h1>Hello3</h1>
<?php else: ?>
    echo "Byy";
<?php endif; ?>                   

<?php for ($count = 1; $count <= 10; $count++) :?>
    <h2>Hello <?php echo $count ?></h2>
    <?php endfor; ?>