<?php
    require 'Pokemon.php';
    require 'Game.php';

    $game = new Game();
    $pokemon = new Pokemon('ピカチュウ', 20, 10);
    $game->battle($pokemon);
?>