<?php require_once 'header.html.php'; ?>

<h2>Jeux disponibles :</h2>
<a href="../Controller/game_add_controller.php">Ajoutez un jeu</a>
<table>
    <thead>
        <th>Nom du jeu</th>
        <th>Nombre de joueurs minimum</th>
        <th>Nombre de joueurs maximum</th>
    </thead>
    <tbody>
    <?php foreach($results as $game):?>
    <tr>
        <td><?= $game->getTitle();?></td>
        <td><?= $game->getMin_players();?></td>
        <td><?= $game->getMax_players();?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
        <th>Nom du jeu</th>
        <th>Nombre de joueurs minimum</th>
        <th>Nombre de joueurs maximum</th>
    </tfoot>
</table>

<?php require_once 'footer.html.php'; ?>