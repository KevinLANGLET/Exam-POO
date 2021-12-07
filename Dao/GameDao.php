<?php

class GameDao{

private PDO $dbh;


    public function __construct()
    {
        try{
            $this->dbh = new PDO("mysql:host=localhost;dbname=wf3_php_final_kevin;charset=utf8","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        }
        catch(PDOException $e){
            echo (("Erreur de connexion a la base de donnée ") . ($e->getMessage()));
        }
    }

    /* add game */


public function add(Game $game):void
    {
        $sth = $this->dbh->prepare("INSERT INTO game (title, min_players, max_players) VALUES (:title, :min_players, :max_players)");
        //:title : parametre nommé
        $sth->bindValue(':title',$game->getTitle(),PDO::PARAM_STR);
        $sth->bindValue(':min_players',$game->getMin_players(),PDO::PARAM_INT);
        $sth->bindValue(':max_players',$game->getMax_players(),PDO::PARAM_INT);
        $sth->execute();
    }
/* recuperer les données de la table */


public function getAll():array
    {
        $sth=$this->dbh->prepare("SELECT * FROM game");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        require_once("../Model/Game.php");

        foreach($results as $key => $game){
            $results[$key]= (new Game())
            ->setTitle($game['title'])
            ->setMin_players($game['min_players'])
            ->setMax_players($game['max_players']);
        }
        return $results;
    }
}