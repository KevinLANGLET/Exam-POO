<?php require_once 'header.html.php'; ?>
<?php foreach ($results as $game): ?>
    <article>
        <h1><?= $game->getTitle() ?></h1>
        <span><?= $game->getMin_players() ?></span>
        <p><?= $game->getMax_players() ?></p>
        <a href="game_show_controller.php?id=<?= $game->getIdgame() ?>">Afficher l'game</a>
    </article>
<?php endforeach; ?>
<?php require_once 'footer.html.php'; ?>