<?php
    class Game {
        public function battle($pokemon) {
            echo $pokemon->name . "があらわれた!" . $pokemon->name . "のHPは" . $pokemon->hp . "だ!\n";
            $pokemon->attack();
        }
    }
?>