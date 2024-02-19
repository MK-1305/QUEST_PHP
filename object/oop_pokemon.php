<?php
    require 'pokemon.php';
    require 'game.php';

    $pikachu = new Pikachu();
    $hitokage = new Hitokage();
    $game = new Game();
    $game->battle($pokemon);
?>