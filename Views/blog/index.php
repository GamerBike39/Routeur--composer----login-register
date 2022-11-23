<?php foreach ($params['livres'] as $livre): ?>

<!-- <?php var_dump($livre); ?> -->

<h1><?= $livre->title ?></h1>
<p><?= $livre->getExcerpt() ?></p>
<small><?= $livre->getCreatedAt() ?></small>
<?= $livre->getButton() ?>


<?php endforeach ?>