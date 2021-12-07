<?php


class game {
    private int $id_game;
    private string $title;
    private int $min_players;
    private $max_players;
    

    /**
     * Get the value of id_game
     */ 
    public function getId_game()
    {
        return $this->id_game;
    }

    /**
     * Set the value of id_game
     *
     * @return  self
     */ 
    public function setId_game(int $id_game): self
    {
        $this->id_game = $id_game;
        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get the value of min_players
     */ 
    public function getMin_players()
    {
        return $this->min_players;
    }

    /**
     * Set the value of min_players
     *
     * @return  self
     */ 
    public function setMin_players(int $min_players): self
    {
        $this->min_players = $min_players;

        return $this;
    }

    /**
     * Get the value of max_players
     */ 
    public function getMax_players()
    {
        return $this->max_players;
    }

    /**
     * Set the value of max_players
     *
     * @return  self
     */ 
    public function setMax_players(int $max_players): self
    {
        $this->max_players = $max_players;

        return $this;
    }
}