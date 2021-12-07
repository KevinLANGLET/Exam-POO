<?php

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    $title = filter_input(INPUT_POST, 'title');
    $min_players = filter_input(INPUT_POST, 'min_players');
    $max_players = filter_input(INPUT_POST, 'max_players');

    if (empty(trim($title))) {
        $error_messages[] = 'Pas de titre';
    }

    if (empty(trim($min_players))) {
        $error_messages[] = 'Pas de joueurs minimum';
    }

    if (empty(trim($max_players))) {
        $error_messages[] = 'Pas de joueurs maximum';
    }

    if (empty($error_messages)) {
        require_once '../Model/Game.php';
        $game = (new Game())->setTitle($title)->setMin_Players($min_players)->setMax_Players($max_players);

        try {
            require_once '../Dao/GameDao.php';
            $gamedao = new GameDao();
            $id = $gamedao->add($game);
            header(sprintf('Location: game_show_controller.php?id=%d', $id));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        require_once '../view/game_add.html.php';
    }
} elseif (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET') {
    require_once '../view/game_add.html.php';
} else {
    echo 'Pas méthode POST ou GET';
}
