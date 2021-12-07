<?php

require_once '../Dao/GameDao.php';
$gamedao = new GameDao();
$game = $gamedao->getAll(
    filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT)
);

require_once '../view/game_show.html.php';