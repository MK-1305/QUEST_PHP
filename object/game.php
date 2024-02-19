<?php

class Game {
    private $pokemon1;
    private $pokemon2;

    public function __construct($pokemon1, $pokemon2) {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function battle() {
        $this->start();
        list($winner, $loser) = $this->attack();
        $this->showResult($winner, $loser);
    }

    private function start() {
        echo $this->pokemon1->getName() . "があらわれた。" . $this->pokemon1->getName() . "のHPは" . $this->pokemon1->getHp() . "だ。\n";
        echo $this->pokemon2->getName() . "があらわれた。" . $this->pokemon2->getName() . "のHPは" . $this->pokemon2->getHp() . "だ。\n";
    }

    private function attack() {
        while (true) {
            $this->pokemon1->attack($this->pokemon2);
            if ($this->pokemon2->isFainted()) {
                return array($this->pokemon1, $this->pokemon2);
            }

            $this->pokemon2->attack($this->pokemon1);
            if ($this->pokemon1->isFainted()) {
                return array($this->pokemon2, $this->pokemon1);
            }
        }
    }

    private function showResult($winner, $loser) {
        echo $loser->getName() . "はたおれた。" . $winner->getName() . "のかち！\n";
    }
}

?>