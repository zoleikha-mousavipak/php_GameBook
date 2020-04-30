<?php

require __DIR__ . "../../Entity/Game.php";

class GameTest extends PHPUnit_Framework_TestCase
{
    public function testImage_WithNull_ReturnPlaceholder()
    {
        $game = new Game();
        $game->getImagePath(null);
        $this->assertEquals('/images/placeholder.jpg', $game->getImagePath());
    }
}
