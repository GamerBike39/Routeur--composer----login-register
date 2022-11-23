<?php foreach ($params['livres'] as $livre): ?>

<!-- <?php var_dump($livre); ?> -->

<h1><?= $livre->title ?></h1>
<p><?= $livre->desc ?></p>
<a href="post/<?= $livre->id ?>">En savoir plus</a>


<?php endforeach ?>