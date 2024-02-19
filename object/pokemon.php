<?php
    class Pokemon {
        public $name;
        public $hp;
        public $atk;

        public function __construct($name, $hp, $atk) {
            $this->name = $name;
            $this->hp = $hp;
            $this->atk = $atk;
        }
        public function attack() {
            echo $this->name . 'のこうげき!10万ボルト';
        }
    }

    // インスタンスの作成とメソッドの呼び出し
    // $pikachu = new Pokemon();
    // $pikachu->attack(); 
    // ピカチュウのこうげき！10万ボルト
?>