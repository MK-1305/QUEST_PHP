<?php

class Pokemon {
    protected $name;
    protected $hp;
    protected $maxHp;
    protected $atk;

    public function __construct($name, $hp, $atk) {
        $this->name = $name;
        $this->hp = $hp;
        $this->maxHp = $hp * 2;
        $this->atk = $atk;
    }

    public function attack($target) {
        $target->setHp($target->getHp() - $this->atk);
        echo $this->name . "のこうげき！";
        $this->attackMessage($target);
    }

    protected function attackMessage($target) {
        // サブクラスで実装
    }

    public function isFainted() {
        return $this->hp <= 0;
    }
    // getNameでカプセル化して外部参照できるようにする
    public function getHp() {
        return $this->hp;
    }
    // setHpでカプセル化し、HPの上限や値を関数で適正な値にすることができる
    public function setHp($value) {
        if ($value < 0) {
            $this->hp = 0;
        } elseif ($value > $this->maxHp) {
            $this->hp = $this->maxHp;
        } else {
            $this->hp = $value;
        }
    }
    
    public function getName() {
        return $this->name;
    }
}

class Pikachu extends Pokemon {
    // POkemon__constructのプロパティを継承して上書きする
    public function __construct() {
        parent::__construct('ピカチュウ', 20, 10);
    }

    protected function attackMessage($target) {
        echo "10万ボルト！" . $target->getName() . "は" . $this->atk . "ダメージをもらった。" . $target->getName() . "のHPは" . $target->getHp() . "だ。";
    }
}

class Hitokage extends Pokemon {
    public function __construct() {
        parent::__construct('ヒトカゲ', 18, 5);
    }

    protected function attackMessage($target) {
        echo "ひのこ！" . $target->getName() . "は" . $this->atk . "ダメージをもらった。" . $target->getName() . "のHPは" . $target->getHp() . "だ。";
    }
}

?>