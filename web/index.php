<?php

require __DIR__ . "/../src/Repository/GameRepository.php";

$repo = new GameRepository();
$games = $repo->findByUserId(1);