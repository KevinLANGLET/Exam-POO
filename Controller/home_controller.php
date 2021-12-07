<?php

require_once '../Dao/GameDao.php';

try {
$gamedao = new GameDao();
$results = $gamedao->getAll();
} catch (PDOException $e){
    echo $e->getMessage();
}
// Afficher les données récupérées
require "../view/home.html.php";
