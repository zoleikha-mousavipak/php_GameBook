<?php

require __DIR__ . "/../Entity/Game.php";

class GameRepository {
    public function findByUserId($id){
        $games = [];
        for ($i=0; $i < 6; $i++) { 
            $game = new Game()
            $game->setTitle("Game " . $id);
            $game->setImagePath("/images/game.jpg");
            $game->setRating(4.5);
            $games[] = $game;
        }
        return $games;
    }
}